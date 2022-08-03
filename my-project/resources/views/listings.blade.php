<!-- <h1><?php echo $heading; ?></h1>

<ul>
        <?php foreach ($list as $item): ?>
                <li><p><?php echo $item['content']; ?></p></li>
        <?php endforeach; ?>
</ul> -->
<h1>{{$heading}}</h1>

@if(count($list) == 0)
        <h3>No items added yet.</h3>    
@else   
        <ul>
        @foreach($list as $item)
                <li><p>{{$item['content']}}</p></li>
        @endforeach
        </ul>
@endif
