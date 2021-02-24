<div class="example example-basic">
   <div class="example-preview">
      <!--begin::Timeline-->
      <div class="timeline timeline-6 mt-3">
        @php $data_all = $transactions->toArray(); @endphp
        @if(!empty($transactions))
         @foreach ($transactions as $transaction) 
         @if($transaction->type == 'created')
         <!--begin::Item-->
         <div class="timeline-item align-items-start">
            <!--begin::Label-->
            <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg" style="    font-size: 11px;">
               {{ date('d-M',strtotime($transaction->created_at)  ) }}  
               <div class="font-size-sm text-muted font-weight-bold" style="    font-size: 10px;"> {{ date('h:i',strtotime($transaction->created_at)  ) }}</div>
            </div>
            <!--end::Label-->
            <!--begin::Badge-->
            <div class="timeline-badge">
               <i class="fa fa-genderless text-success icon-xl"></i>
            </div>
            <!--end::Badge-->
            <!--begin::Text-->
            <div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">The form was created by <span class="font-weight-bolder font-size-lg text-dark-75">{{ getnamebyuserid($transaction->user_id)  }}</span></div>
            <!--end::Text-->
         </div>
         @endif
         <!--end::Item-->
         <!--begin::Item-->
         @if($transaction->type == 'updated')
         @php
         $update_values =  getupdatedvalue($transaction->id);
         $data = $update_values->toArray();
         @endphp
         @if(empty($data))
         <div class="timeline-item align-items-start">
            <!--begin::Label-->
            <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"  style="    font-size: 11px;">
               {{ date('d-M',strtotime($transaction->created_at)  ) }}  
               <div class="font-size-sm text-muted font-weight-bold"  style="    font-size: 9px;"> {{ date('h:i',strtotime($transaction->created_at)  ) }}</div>
            </div>
            <!--end::Label-->
            <!--begin::Badge-->
            <div class="timeline-badge">
               <i class="fa fa-genderless text-success icon-xl"></i>
            </div>
            <!--end::Badge-->
            <!--begin::Text-->
            <div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">The form was updated by <span class="font-weight-bolder font-size-lg text-dark-75">{{ getnamebyuserid($transaction->user_id)  }}</span></div>
            <!--end::Text-->
         </div>
         @endif
         @if(count($update_values) > 0)  
         @foreach ($update_values as $update_value)
         <div class="timeline-item align-items-start">
            <!--begin::Label-->
            <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"  style="    font-size: 11px;">
               {{ date('d-M',strtotime($update_value->created_at)  ) }}  
               <div class="font-size-sm text-muted font-weight-bold"  style="    font-size: 9px;"> {{ date('h:i',strtotime($update_value->created_at)  ) }}</div>
            </div>
            <!--end::Label-->
            <!--begin::Badge-->
            <div class="timeline-badge">
               <i class="fa fa-genderless text-warning  icon-xl"></i>
            </div>
            <!--end::Badge-->
            <!--begin::Desc-->

             <?php
                $type = $update_value->type;
                if($update_value->type == 'cheque_number'){
                    $type = 'Check Number';
                }
                if($update_value->type == 'transaction_method'){
                    $type = 'Transaction Method';
                }
                if($update_value->type == 'transaction_date'){
                    $type = 'Transaction Date';
                }
               ?>

            <div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">
               <span class="font-weight-bolder font-size-lg text-dark-75">{{ ucfirst($type) }} </span> Changed <span class="font-weight-bolder font-size-lg text-dark-75"> {{ $update_value->old_value }} </span>  To <span class="font-weight-bolder font-size-lg text-dark-75"> {{  $update_value->new_value  }}</span>
               <!-- a href="#" class="text-primary">USD 700</a>. to ESL</div> --> 
            </div>
            <!--end::Desc-->
         </div>
         @endforeach
         @endif
         @endif
         @if($transaction->type == 'deleted')
         <!--begin::Item-->
         <div class="timeline-item align-items-start">
            <!--begin::Label-->
            <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"  style="    font-size: 11px;">
               {{ date('d-M',strtotime($transaction->created_at)  ) }}  
               <div class="font-size-sm text-muted font-weight-bold"  style="    font-size: 9px;"> {{ date('h:i',strtotime($transaction->created_at)  ) }}</div>
            </div>
            <!--end::Label-->
            <!--begin::Badge-->
            <div class="timeline-badge">
               <i class="fa fa-genderless text-danger  icon-xl"></i>
            </div>
            <!--end::Badge-->
            <!--begin::Text-->
            <div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">The form was deleted by <span class="font-weight-bolder font-size-lg text-dark-75">{{ getnamebyuserid($transaction->user_id)  }}</span></div>
            <!--end::Text-->
         </div>
         @endif
         <!--end::Item-->
         <!--begin::Item-->
         @endforeach
         @endif

         @if(empty($data_all))
         <div class="timeline-item align-items-start" style="    text-align: center;">

            <div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3"> <span class="font-weight-bolder font-size-lg text-dark-75">no data available</span></div>
            <!--end::Text-->
         </div>

         @endif
      </div>
      <!--end::Timeline-->
   </div>
</div>  