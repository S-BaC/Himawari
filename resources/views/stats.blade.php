<div class="stats-container grid grid-cols-5 gap-10 h-48 px-28">
    <div class="col-span-3 w-full h-full grid grid-rows-3 gap-3">
        <div class="grid grid-cols-6 w-full">
            <img class="h-10 self-center justify-self-center" src="{{URL::asset('/img/icons/clipboard.svg')}}" alt="">
            <div class="bg-special-01 stat-bar">
                <div class="stat-bar-ele">
                    <p><span>{{$data['totalRooms']}}</span> {{__("total rooms")}} </p>
                </div>
                <div class="stat-bar-ele">
                    <p><span>{{$data['vacantRooms']}}</span> {{__("vacant")}} </p>
                </div>
                <div class="stat-bar-ele">
                    <p><span>{{$data['inpatients']}}</span> {{__("inpatients")}}</p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-6 w-full">
            <img class="h-10 self-center justify-self-center" src="{{URL::asset('/img/icons/usergroup.svg')}}" alt="">
            <div class="bg-special-02 stat-bar">
                <div class="stat-bar-ele">
                    <p><span>{{$data['doctors']}}</span> {{__("doctors")}} </p>
                </div>
                <div class="stat-bar-ele">
                    <p><span>{{$data['nurses']}}</span> {{__("nurses")}} </p>
                </div>
                <div class="stat-bar-ele">
                    <p><span>{{$data['other']}}</span> {{__("other")}}</p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-6 w-full">
            <img class="h-10 self-center justify-self-center" src="{{URL::asset('/img/icons/archive.svg')}}" alt="">
            <div class="bg-special-03 stat-bar grid-cols-2">
                <div class="stat-bar-ele">
                    <p><span>{{$data['daysPharma']}}</span> {{__("days' pharmaceuticals")}} </p>
                </div>
                <div class="stat-bar-ele">
                    <p><span>{{$data['daysOther']}}</span> {{__("days' other supplies")}} </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-span-2 bg-special-04 w-full h-full rounded-lg p-5 overflow-y-scroll">
        @if(count($data['todayMessages']) > 0) {
            @foreach ($data['todayMessages'] as $msg)
            <div class="msg-ele">
                <div class="msg-header">
                    <li class="msg-sender font-bold text-lg">{{$msg->title}}</li>
                </div>
                <div class="msg-content my-3">
                    {{$msg['content']}}
                </div>
                <p class="msg-info text-right">{{$msg->sender_name}}, <span class="msg-time font-thin">({{$msg->date_time}})</span></p>
                
                <hr class="border-slate-300 my-3">
            </div>
            @endforeach
        }
        @else
            <p class="h-30 text-center py-10">
                {{__("No message received today.")}}
            </p>
        @endif

        <div class="w-full flex justify-center items-center gap-5">
            <img class="w-6" src="{{URL::asset('/img/icons/white/chat.svg')}}" alt="">
            <a href="/messages" class="cursor-pointer font-bold">{{__("View All")}}</a>
        </div>

    </div>
</div>