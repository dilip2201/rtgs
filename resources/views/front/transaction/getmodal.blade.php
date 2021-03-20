<style type="text/css">
    .example .example-preview {
    border: none; 
    padding: 1.75rem 1.5rem;
    border-top-left-radius: .42rem;
    border-top-right-radius: none; 
}
</style>

<div class="example example-basic">
   <div class="example-preview">
      <!--begin::Timeline-->
      <div class="timeline timeline-6 mt-3">
        @php $data_all = $transactions->toArray(); @endphp
        @if(!empty($transactions))
         @foreach ($transactions as $transaction) 
         @if($transaction->type == 'created')
             <div class="timeline-item align-items-start" style="margin:0px;">
                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg" style="    font-size: 11px;">
                   {{ date('d-M',strtotime('+5 hour +30 minutes',strtotime($transaction->created_at))) }}  
                   <div class="font-size-sm text-muted font-weight-bold" style="    font-size: 10px;">{{ date('h:i',strtotime('+5 hour +30 minutes',strtotime($transaction->created_at))) }} </div>
                </div>
                <div class="timeline-badge">
                   <i class="fa fa-genderless text-success icon-xl"></i>
                </div>
                <div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3" style="color: #828282!important; margin-top: 5px; margin-bottom: 5px;">The form was created by <span class="font-weight-bolder font-size-lg text-dark-75">{{ getnamebyuserid($transaction->user_id)  }}</span></div>
             </div>
         @endif
         <!--end::Item-->
         <!--begin::Item-->
         @if($transaction->type == 'updated')

         <div class="timeline-item align-items-start"style="margin:0px;" >
            <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg" style="    font-size: 11px;">
               {{ date('d-M',strtotime('+5 hour +30 minutes',strtotime($transaction->created_at))) }}  
               <div class="font-size-sm text-muted font-weight-bold" style="    font-size: 10px;"> {{ date('h:i',strtotime('+5 hour +30 minutes',strtotime($transaction->created_at))) }}</div>
            </div>
            <div class="timeline-badge">
               <i class="fa fa-genderless text-success icon-xl" style="color: #ff6a00!important; "></i>
            </div>
            <div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3" style="margin-top: 5px; margin-bottom: 5px; color: #828282!important;">The form was Updated by <span class="font-weight-bolder font-size-lg text-dark-75">{{ getnamebyuserid($transaction->user_id)  }}</span></div>
         </div>
         @php
         $update_values =  getupdatedvalue($transaction->id);
         $data = $update_values->toArray();
         @endphp
         @if(empty($data))
         <div class="timeline-item align-items-start" style="margin:0px;">
            <!--begin::Label-->
            <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"  style="    font-size: 11px;">
               {{ date('d-M',strtotime('+5 hour +30 minutes',strtotime($transaction->created_at))) }}  
               <div class="font-size-sm text-muted font-weight-bold"  style="    font-size: 9px;"> {{ date('h:i',strtotime('+5 hour +30 minutes',strtotime($transaction->created_at))) }}</div>
            </div>
            <!--end::Label-->
            <!--begin::Badge-->
            <div class="timeline-badge">
               <i class="fa fa-genderless text-success icon-xl"></i>
            </div>
            <!--end::Badge-->
            <!--begin::Text-->
            <div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3" style="margin-top: 5px; margin-bottom: 5px; color: #828282!important;">The form was updated by <span class="font-weight-bolder font-size-lg text-dark-75">{{ getnamebyuserid($transaction->user_id)  }}</span></div>
            <!--end::Text-->
         </div>
         @endif
         @if(count($update_values) > 0)  
         @foreach ($update_values as $update_value)
             <?php
                $type = $update_value->type;
                if($update_value->type == 'cheque_number'){
                    $type = 'Cheque Number';
                }
                if($update_value->type == 'remmiter_id'){
                    $type = 'Remmiter';
                }
                if($update_value->type == 'beneficiary_id'){
                    $type = 'Beneficiary';
                }
                if($update_value->type == 'transaction_method'){
                    $type = 'Transaction Method';
                }
                if($update_value->type == 'transaction_date'){
                    $type = 'Transaction Date';
                }
                $old_value = $update_value->old_value;
                $new_value = $update_value->new_value;
                if($update_value->type == 'transaction_method'){
                    $old_value = ucfirst($update_value->old_value);
                    $new_value = ucfirst($update_value->new_value);
                }
                if($update_value->type == 'transaction_date'){
                    $old_value = date('d-M-y',strtotime($update_value->old_value)  );
                    $new_value = date('d-M-y',strtotime($update_value->new_value)  );
                }
               ?>

            <div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3" style="margin-left: 70px;    font-size: 11px;">
               <span class="font-weight-bolder font-size-lg text-dark-75" style="    font-size: 11px;"> <span class="font-weight-mormal font-size-lg timeline-content text-muted pl-3" style="    font-size: 11px;"> - </span> {{ ucfirst($type) }} </span> Changed <span class="font-weight-bolder font-size-lg text-dark-75" style="    font-size: 11px;"> {{ $old_value }} </span>  To <span class="font-weight-bolder font-size-lg text-dark-75" style="    font-size: 11px;"> {{  $new_value  }}</span>
               <!-- a href="#" class="text-primary">USD 700</a>. to ESL</div> --> 
            </div>
            <!--end::Desc-->
         
         @endforeach
         @endif
         @endif
         @if($transaction->type == 'deleted')
         <!--begin::Item-->
         <div class="timeline-item align-items-start" style="margin:0px;">
            <!--begin::Label-->
            <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"  style="    font-size: 11px;">
               {{ date('d-M',strtotime('+5 hour +30 minutes',strtotime($transaction->created_at))) }}  
               <div class="font-size-sm text-muted font-weight-bold"  style="    font-size: 9px;">  {{ date('h:i',strtotime('+5 hour +30 minutes',strtotime($transaction->created_at))) }}</div>
            </div>
            <!--end::Label-->
            <!--begin::Badge-->
            <div class="timeline-badge">
               <i class="fa fa-genderless text-danger  icon-xl"></i>
            </div>
            <!--end::Badge-->
            <!--begin::Text-->
            <div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3" style="margin-top: 5px; margin-bottom: 5px; color: #828282!important;">The form was deleted by <span class="font-weight-bolder font-size-lg text-dark-75">{{ getnamebyuserid($transaction->user_id)  }}</span></div>
            <!--end::Text-->
         </div>
         @endif
         <!--end::Item-->
         <!--begin::Item-->
         @endforeach
         @endif

         @if(empty($data_all))
         <div class="timeline-item align-items-start" style="margin:0px;    text-align: center;">

            <div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3"> <span class="font-weight-bolder font-size-lg text-dark-75">no data available</span></div>
            <!--end::Text-->
         </div>

         @endif
      </div>
      <!--end::Timeline-->
   </div>
</div>  