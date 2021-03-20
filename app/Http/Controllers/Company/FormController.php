<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use DB;
use Auth;
use Carbon\Carbon;
use PDF;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\StreamedResponse;

class FormController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function download($downloadid){

        $id = 0;
        if(auth()->user()->parent_id == null){
            $id = auth()->user()->id;   
        }else{
            $id = auth()->user()->parent_id;    
        }
        
            
        $transactiontable = $id.'_transactions';
        $transactionbenitable = $id.'_transaction_benificiaries';
        $tcount = DB::table($transactionbenitable)->where('transaction_id',$downloadid)->count();

        if($tcount == 1){
            $benificiarytable = $id.'_benificiaries';
            define("DOMPDF_UNICODE_ENABLED", true);
             $rdata = DB::table($transactiontable)
            ->join($benificiarytable.' as r','r.id',$transactiontable.'.remmiter_id')
            ->where($transactiontable.'.id', $downloadid)
            ->select([$transactiontable.'.*','r.name as rname','r.address as raddress','r.address2 as raddress2','r.area as rarea','r.city as rcity','r.state as rstate','r.pin as rpin','r.mobile_number as rmobile_number','r.account_number as raccount_number'])
            ->first();
            $benificier = DB::table($transactionbenitable)->where('transaction_id',$downloadid)->first();
            $benificierid = 0;
            if(!empty($benificier)){
                $benificierid = $benificier->beneficiary_id;
            }


            $pdf = PDF::setPaper('a4', 'portrait')->loadView('page', ['data'=>$rdata,'benificierid'=>$benificierid]);
            return $pdf->download('INV - '.$rdata->form_number.'.pdf');
        }
        if($tcount > 1){
            $benificiarytable = $id.'_benificiaries';

            $transactiondata = DB::table($transactionbenitable)
            ->join($transactiontable.' as tr','tr.id',$transactionbenitable.'.transaction_id')
            ->join($benificiarytable.' as r','r.id','tr.remmiter_id')
            ->join($benificiarytable.' as b','b.id',$transactionbenitable.'.beneficiary_id')
            ->where($transactionbenitable.'.transaction_id',$downloadid)
            ->select([$transactionbenitable.'.*','tr.*',$transactionbenitable.'.id as id','r.name as rname','r.address as raddress','r.address2 as raddress2','r.area as rarea','r.city as rcity','r.state as rstate','r.pin as rpin','r.mobile_number as rmobile_number','r.account_number as raccount_number','b.name as bname','b.address as baddress','b.address2 as baddress2','b.area as barea','b.city as bcity','b.state as bstate','b.pin as bpin','b.mobile_number as bmobile_number','b.ifsc as bifsc','b.account_type as baccount_type','b.account_number as baccount_number',$transactionbenitable.'.amount as tamout',$transactionbenitable.'.remarks as tremark','tr.amount as traamount'])->get();
            
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->getColumnDimension('A')->setWidth(10);
            $sheet->getColumnDimension('B')->setWidth(20);
            $sheet->getColumnDimension('C')->setWidth(30);
            $sheet->getColumnDimension('D')->setWidth(20);
            $sheet->getColumnDimension('E')->setWidth(20);
            $sheet->getColumnDimension('F')->setWidth(20);
            $sheet->getColumnDimension('G')->setWidth(20);
            $sheet->getColumnDimension('H')->setWidth(20);
            $sheet->getColumnDimension('I')->setWidth(20);
            $sheet->getColumnDimension('J')->setWidth(20);
            $sheet->getColumnDimension('K')->setWidth(20);
            $sheet->getColumnDimension('L')->setWidth(20);
           

            $sheet->setCellValue('A1', 'Sr. NO.');
            $sheet->setCellValue('B1', 'TRAN.ID');
            $sheet->setCellValue('C1', 'AMOUNT');
            $sheet->setCellValue('D1', 'SENDER ACCOUNT NO');
            $sheet->setCellValue('E1', 'SENDER NAME');
            $sheet->setCellValue('F1', 'SMS EML');
            $sheet->setCellValue('G1', 'DETAIL');
            $sheet->setCellValue('H1', 'BENEFICIARY IFCS');
            $sheet->setCellValue('I1', 'BENEFICIARY ACCOUNT TYPE');
            $sheet->setCellValue('J1', 'BENEFICIARY ACCOUNT NO');
            $sheet->setCellValue('K1', 'BENEFICIARY ACCOUNT NAME');
            $sheet->setCellValue('L1', 'SENDER TO RECEIVER');

             $rowno = 2;
            foreach ($transactiondata as $transaction) {
                
                $am = $transaction->traamount;
                $sheet->setCellValue('A' . $rowno, $rowno ?? '');
                $sheet->setCellValue('B' . $rowno, '' );
                $sheet->setCellValue('c' . $rowno, $transaction->tamout);
                $sheet->setCellValue('D' . $rowno, $transaction->raccount_number ?? 'N/A');
                $sheet->setCellValue('E' . $rowno, $transaction->rname ?? 'N/A');
                $sheet->setCellValue('F' . $rowno, 'EML' ?? 'N/A');
                $sheet->setCellValue('G' . $rowno, '');
                $sheet->setCellValue('H' . $rowno, $transaction->bifsc ?? 'N/A');
                $sheet->setCellValue('I' . $rowno, $transaction->baccount_type ?? 'N/A');
                $sheet->setCellValue('J' . $rowno,$transaction->baccount_number ?? 'N/A');
                $sheet->setCellValue('K' . $rowno,$transaction->bname ?? 'N/A');
                $sheet->setCellValue('L' . $rowno,$transaction->tremark ?? 'N/A');
                $rowno++;
            }
            $sheet->setCellValue('A' . $rowno, 'Total');
            $sheet->setCellValue('B' . $rowno, 'Total');
            $sheet->setCellValue('c' . $rowno, $am);
            $sheet->mergeCells('A'.$rowno.':B'.$rowno);
             $fileName = "Demo.xlsx";
            $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
            $response =  new StreamedResponse(
                function () use ($writer) {
                    $writer->save('php://output');
                }
            );
            $response->headers->set('Content-Type', 'application/vnd.ms-excel');
            $response->headers->set('Content-Disposition', 'attachment;filename="Invoices.xlsx"');
            $response->headers->set('Cache-Control','max-age=0');
            return $response;
        }
    }

    public function copy($copyid){
        $id = 0;
        if(auth()->user()->parent_id == null){
            $id = auth()->user()->id;   
        }else{
            $id = auth()->user()->parent_id;    
        }
        $data = DB::table($id.'_transactions')->where('id', $copyid)->first();
        if(!empty($data)){
            $inser_table = DB::table($id.'_transactions')->insert(['user_id' => Auth::user()->id,
            'remmiter_id' => $data->remmiter_id,
            'beneficiary_id' => $data->beneficiary_id,
            'amount' => $data->amount,
            'cheque_number' => $data->cheque_number,
            'transaction_method' => $data->transaction_method,
            'transaction_date' => date('Y-m-d',strtotime($data->transaction_date)),
            'remarks' => $data->remarks,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        
            $last_id = \DB::getPdo()->lastInsertId();
            DB::table($id.'_transaction_logs')->insert([
                'user_id' => Auth::user()->id,
                'type' => 'created',
                'form_id' => $last_id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()]);
        }
       
        return redirect('company/transaction')->with('status', 'Transaction copied successfully.');
    }

    public function create($tid = 0){
    	$id = 0;
        $type = 'create';
		if(auth()->user()->parent_id == null){
			$id = auth()->user()->id;	
		} else {
			$id = auth()->user()->parent_id;	
		}
		$benificiaries = \DB::table($id.'_benificiaries')->where('status','enabled')->get();
        $remmiters = \DB::table($id.'_benificiaries')->where('is_remitter','yes')->where('status','enabled')->get();
        $transaction = \DB::table($id.'_transactions')->where('id',$tid)->first();
    	return view('front.form.create',compact('benificiaries','remmiters','transaction','type','id'));
    }

    public function copyform($tid = 0){
        $id = 0;
        $type = 'copy';
        if(auth()->user()->parent_id == null){
            $id = auth()->user()->id;   
        } else {
            $id = auth()->user()->parent_id;    
        }
        $benificiaries = \DB::table($id.'_benificiaries')->get();
        $remmiters = \DB::table($id.'_benificiaries')->where('is_remitter','yes')->get();
        $transaction = \DB::table($id.'_transactions')->where('id',$tid)->first();
        return view('front.form.create',compact('benificiaries','remmiters','transaction','type','id'));
    }

    public function printsectionmodal(Request $request){
         $id = 0;
        if(auth()->user()->parent_id == null){
            $id = auth()->user()->id;   
        }else{
            $id = auth()->user()->parent_id;    
        }
        $benificiery = \DB::table($id.'_benificiaries')->where('id',$request->beneficiary_id)->first();
        $remmiter = \DB::table($id.'_benificiaries')->where('id',$request->remmiter_id)->first();

        define("DOMPDF_UNICODE_ENABLED", true);
        
        $pdf = PDF::setPaper('a4', 'portrait')->loadView('pagetwo', ['transaction_date'=>$request->transaction_date,'amount'=>$request->amount,'transaction_method'=>$request->transaction_method,'cheque_number'=>$request->cheque_number,'benificiery'=>$benificiery,'remmiter'=>$remmiter,'remarks'=>$request->remarks]);
        $filename = "preview.pdf";
        $pdf->save('public/pdf/'.$filename);
        return view('front.form.pdfload',compact('filename'));
    }

    public function formpdf($id = 0,Request $request){
       
        // $pdf = PDF::loadView('front.form.formpdf');
        // return $pdf->stream('report.pdf');
        $id = 0;
        if(auth()->user()->parent_id == null){
            $id = auth()->user()->id;   
        }else{
            $id = auth()->user()->parent_id;    
        }
        $data = [];
        $data = DB::table($id.'_transactions')->leftJoin($id.'_benificiaries', $id.'_transactions'.'.beneficiary_id', '=', $id.'_benificiaries'.'.id')->orderby($id.'_transactions'.'.id', 'desc')->where($id.'_transactions'.'.is_deleted','no')->where($id.'_transactions'.'.id', 1)->first();

         return view('front.form.formpdf',compact('data'));
    }

    public function getdata(Request $request){

        $id = 0;
        if(auth()->user()->parent_id == null){
            $id = auth()->user()->id;   
        }else{
            $id = auth()->user()->parent_id;    
        }
        $benificiary = \DB::table($id.'_benificiaries')->where('id',$request->remmiter)->first();
        return view('front.form.remmiter',compact('benificiary'));
    }



    public function getdatabenificiaries(Request $request){

        $id = 0;
        if(auth()->user()->parent_id == null){
            $id = auth()->user()->id;   
        }else{
            $id = auth()->user()->parent_id;    
        }
        $benificiary = \DB::table($id.'_benificiaries')->where('id',$request->benificiaries)->first();
        return view('front.form.benificiaries',compact('benificiary'));
        
        
    }
    
    public function store(Request $request)
    {
        $id = 0;
        if(auth()->user()->parent_id == null){
            $id = auth()->user()->id;
        }else{
            $id = auth()->user()->parent_id;
        }
       
        $rules = [
            'remmiter_id' => 'required',
            'amount' => 'required',
            'cheque_number' => 'required',
            'transaction_method' => 'required',
            'transaction_date' => 'required',
        ];
        
        
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $arr = array("status" => 400, "msg" => $validator->errors()->first(), "result" => array());
        } else {
            try {
                if(isset($request->transaction_id) && $request->transaction_id != '' && $request->type == 'create') {
                    $t_id = decrypt($request->transaction_id);
                    $transaction_id = decrypt($request->transaction_id);
                    $first_transaction = DB::table($id.'_transactions')->where('id',$t_id)->first();
                    
                    DB::table($id.'_transaction_logs')->insert([
                        'user_id' => Auth::user()->id,
                        'type' => 'updated',
                        'form_id' => $t_id,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()]);


                    $last_trans_id = DB::getPdo()->lastInsertId();


                    
                    if($first_transaction->remmiter_id != $request->remmiter_id){
                        DB::table($id.'_transaction_updated_logs')->insert([
                            'log_id' => $last_trans_id,
                            'type' => 'remmiter_id',
                            'old_value' => $first_transaction->remmiter_id,
                            'new_value' => $request->remmiter_id,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()]);

                    }
                    
                    if($first_transaction->amount !== $request->amount){
                       
                        DB::table($id.'_transaction_updated_logs')->insert([
                            'log_id' => $last_trans_id,
                            'type' => 'amount',
                            'old_value' => $first_transaction->amount,
                            'new_value' => $request->amount,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()]);
                    }
                    if($first_transaction->cheque_number !== $request->cheque_number){
                        DB::table($id.'_transaction_updated_logs')->insert([
                            'log_id' => $last_trans_id,
                            'type' => 'cheque_number',
                            'old_value' => $first_transaction->cheque_number,
                            'new_value' => $request->cheque_number,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()]);
                    }
                    if($first_transaction->transaction_method !== $request->transaction_method){
                        DB::table($id.'_transaction_updated_logs')->insert([
                            'log_id' => $last_trans_id,
                            'type' => 'transaction_method',
                            'old_value' => $first_transaction->transaction_method,
                            'new_value' => $request->transaction_method,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()]);
                    }
                    if($first_transaction->transaction_date !== $request->transaction_date){
                        DB::table($id.'_transaction_updated_logs')->insert([
                            'log_id' => $last_trans_id,
                            'type' => 'transaction_date',
                            'old_value' => $first_transaction->transaction_date,
                            'new_value' => $request->transaction_date,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()]);
                    }
                    DB::table($id.'_transactions')->where('id',$t_id)->update(
                        ['user_id' => Auth::user()->id,
                        'remmiter_id' => $request->remmiter_id,
                        'amount' => $request->amount,
                        'cheque_number' => $request->cheque_number,
                        'transaction_method' => $request->transaction_method,
                        'transaction_date' => date('Y-m-d',strtotime($request->transaction_date)),
                        'remarks' => $request->remarks,'updated_at'=>Carbon::now()]);
                    DB::table($id.'_transaction_benificiaries')->where('transaction_id',$transaction_id)->delete();

                    if(!empty($request->beni)){
                        foreach ($request->beni as $beneficiarr) {
                           
                            DB::table($id.'_transaction_benificiaries')->insert([
                            'transaction_id' => $transaction_id,
                            'beneficiary_id' => $beneficiarr['benificiar'],
                            'amount' => $beneficiarr['amount'],
                            'remarks' => $beneficiarr['remark'],
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()]);
                        }
                    }

                    return redirect('company/transaction')->with('status', 'Transaction Update successfully.');
                }else{
                    $form_id = '0001';
                    $qry = DB::table($id.'_transactions')->orderby('id','desc')->first();
                    if(!empty($qry)){
                        $form_id = $qry->form_number +1;
                    }
                    DB::table($id.'_transactions')->insert(['user_id' => Auth::user()->id,
                        'remmiter_id' => $request->remmiter_id,
                        'amount' => $request->amount,
                        'cheque_number' => $request->cheque_number,
                        'transaction_method' => $request->transaction_method,
                        'transaction_date' => date('Y-m-d',strtotime($request->transaction_date)),
                        'form_number' => $form_id,
                        'remarks' => $request->remarks,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);

                        $last_id = DB::getPdo()->lastInsertId();
                    $transaction_id = $last_id;
                    DB::table($id.'_transaction_logs')->insert([
                            'user_id' => Auth::user()->id,
                            'type' => 'created',
                            'form_id' => $last_id,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()]);


                    DB::table($id.'_transaction_benificiaries')->where('transaction_id',$transaction_id)->delete();
                   

                    if(!empty($request->beni)){
                        foreach ($request->beni as $beneficiarr) {
                           
                            DB::table($id.'_transaction_benificiaries')->insert([
                            'transaction_id' => $transaction_id,
                            'beneficiary_id' => $beneficiarr['benificiar'],
                            'amount' => $beneficiarr['amount'],
                            'remarks' => $beneficiarr['remark'],
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()]);
                        }
                    }
                    if($request->type == 'create'){
                        return redirect('company/transaction')->with('status', 'Transaction added successfully.');
                    }
                    if($request->type == 'copy'){
                        return redirect('company/transaction')->with('status', 'Transaction copied successfully.');
                    }

                    

                }
                

            } catch (\Illuminate\Database\QueryException $ex) {
                $msg = $ex->getMessage();
                if (isset($ex->errorInfo[2])) :
                    $msg = $ex->errorInfo[2];
                endif;
                return redirect('company/transaction')->with('error', $msg);

            } catch (Exception $ex) {
                $msg = $ex->getMessage();
                if (isset($ex->errorInfo[2])) :
                    $msg = $ex->errorInfo[2];
                endif;
                return redirect('company/transaction')->with('error', $msg);
            }
        }
    }
    
}
