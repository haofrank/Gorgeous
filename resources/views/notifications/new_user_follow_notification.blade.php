<li class="notifications {{ $notification->unread() ? 'unread' : ' ' }}">
    <b>{{$notification->created_at}}: </b>
    <a href="{{ $notification->data['name'] }}">
        {{ $notification->data['name'] }}
    </a> 关注了你。
</li>
