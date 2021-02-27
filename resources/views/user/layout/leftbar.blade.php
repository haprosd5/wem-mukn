<div class="leftbar">
    <div class="list-group mb-2">
        <li class="list-group-item ">
            <b><i class="fa fa-lg fa-bars" aria-hidden="true"></i> Thông tin</b>
        </li>
        <li class="list-group-item"><i class="fas fa-user fa-lg" aria-hidden="true"></i>
            {{Auth::user()->name}} <b class="niceUsername"></b></li>
        <li class="list-group-item"><i class="fas fa-coins fa-lg"></i>
            Xu <b id="ggcoin">{{Auth::user()->xu}}</b>
            <a href="/user/payment">Nạp</a>
        </li>
        </li>
    </div>
    <ul class="list-group mb-2">
        <li class="list-group-item"><b><i class="fa fa-lg fa-bars" aria-hidden="true"> </i> Menu</b>
        </li>
        <a href="/user/payment" class="list-group-item list-group-item-action "><i
                class="fa-lg fas fa-wallet" aria-hidden="true"></i> Nạp xu <span
                class="badge badge-success"><i class="fas fa-coins fa-lg"></i></span></a>

        <a href="/user/exchange" class="list-group-item list-group-item-action "><i
                class="fas fa-lg fa-exchange-alt" aria-hidden="true"></i> Nạp game <span
                class="badge badge-warning">KNB</span></a>
        <a href="/user/giftcode" class="list-group-item list-group-item-action "><i
                class="fa fa-lg fa-gift" aria-hidden="true"></i> Giftcode</a>
        <a href="/user/payment_log" class="list-group-item list-group-item-action "><i class="fa fa-lg fa-history" aria-hidden="true"></i> Lịch sử nạp</a>
        <a href="/user/quick-play-tramyeu" class="list-group-item list-group-item-action "><i class="fa fa-lg fa-gamepad" aria-hidden="true"></i> Chơi game</a>
        
    </ul>
</div>