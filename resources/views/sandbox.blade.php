<div>
    Hello

    @foreach ($data as $item)
        {{$item}}
    @endforeach

<script>

    console.log(<?php json_encode($data); ?>);

</script>
</div>
