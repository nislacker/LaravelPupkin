<div class="container">

    {{--@if(count($data) < 3)--}}
    {{--В массиве меньше трех элементов--}}
    {{--@elseif(count($data) == 3)--}}
    {{--В массиве три элемента--}}
    {{--@else--}}
    {{--В массиве больше трех элементов--}}
    {{--@endif--}}

    {{--@for($i = 0; $i < count($dataI); ++$i)--}}
    {{--<li>{{  $dataI[$i] }}</li>--}}
    {{--@endfor--}}

    {{--@foreach($data as $k=>$v)--}}
    {{--<li>{{  $k.'=>'.$v }}</li>--}}
    {{--@endforeach--}}

    {{--@forelse($data as $k=>$v)--}}
        {{--<li>{{  $k.'=>'.$v }}</li>--}}
    {{--@empty--}}
        {{--<p>No items</p>--}}
{{--@endforelse--}}

{{--@each('default.list', $dataI, 'value')--}}

@myDir('doIt')

<!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna
                mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna
                mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
                porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
                ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
    </div>

    <hr>

</div> <!-- /container -->