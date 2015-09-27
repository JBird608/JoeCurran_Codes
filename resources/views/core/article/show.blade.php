@extends('core.standard')

@section('cover')
    <div class="row article_pre">
        <div id="cover">
            <img src="{{ asset('img/cover_placeholder.png') }}" alt="Random"/>
        </div>

        <div class="large-12 columns article_title">
            <h1>Some random title for the post goes here - Part 1</h1>
        </div>
    </div>
@stop

@section('body')
    <article>
        <ul class="meta">
            <li><i class="fa fa-calendar-o"></i>September 14, 2015</li>
            <li><a href="#" title="More Random Articles"><i class="fa fa-user"></i>Joe Curran</a></li>
            <li><a href="#" title="More Random Articles"><i class="fa fa-archive"></i>Random</a></li>
        </ul>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla posuere aliquam neque id rhoncus. Fusce mollis massa quam, non bibendum justo vulputate at. In hac habitasse platea dictumst. Vivamus in lacus non felis vestibulum euismod ac vitae dolor. Fusce tempus luctus lacinia. Quisque aliquet placerat consequat. Cras vitae ornare magna. Integer scelerisque urna ut metus mattis vulputate. Curabitur ac turpis justo. Aliquam ut nisi sit amet leo pulvinar ultricies. Nunc nec mi et risus accumsan bibendum. Cras iaculis enim et dapibus sollicitudin. Suspendisse eu bibendum velit.</p>
        <p>In laoreet fringilla semper. Vivamus et lorem dolor. Morbi id ornare libero. Sed a lacus sed purus mattis viverra. Praesent eget auctor enim, mollis sodales ipsum. Fusce urna nisl, tincidunt vel lacinia a, commodo et erat. Nulla nec odio et justo pharetra egestas. Donec condimentum mollis nisi, vel pellentesque odio bibendum vel. In fermentum, enim et vulputate volutpat, massa nisl sodales ligula, id vulputate est sem quis nibh. Praesent aliquam hendrerit consequat. Maecenas eget interdum mi. Donec pellentesque vel eros ac feugiat.</p>
        <blockquote cite="http://developer.mozilla.org">
            <p>This is a quotation taken from the Mozilla Developer Center.</p>
        </blockquote>
        <p>Donec at elit ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque ut urna quis neque blandit dictum nec non diam. Morbi tempor ullamcorper sapien, feugiat facilisis nisl imperdiet at. Maecenas metus nunc, pharetra sed justo eu, aliquet feugiat quam. Phasellus tellus est, rutrum sed tincidunt nec, aliquam eu sapien. Cras viverra finibus luctus. Suspendisse maximus eleifend varius. Nulla pellentesque quis urna et commodo. Curabitur pharetra sit amet tellus in congue.</p>
        <h2>Super Size That?</h2>
        <p>Donec sed tincidunt mi, sed egestas erat. Quisque a velit purus. Maecenas dignissim neque sed bibendum lacinia. Donec elementum, magna quis posuere efficitur, odio purus ornare erat, id rutrum diam purus in augue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam id metus eget velit rhoncus cursus eget in ipsum.</p>
        <h3>The Pros & Cons</h3>
        <p>Integer augue justo, ultrices eget nunc sit amet, hendrerit sagittis dui.
        <blockquote cite="http://developer.mozilla.org">
            <p>This is a quotation taken from the Mozilla Developer Center.</p>
            <a href="#">Mozilla.org</a>
        </blockquote>
        <a href="">Nunc nisl turpis</a>, hendrerit nec risus sit amet, interdum porta nibh. Vestibulum ac odio non leo pellentesque tempor. Duis in consequat leo. Sed elementum lobortis urna, sed vehicula sem rhoncus eu. Aenean scelerisque tincidunt dui, pharetra dignissim nisi sagittis nec. Praesent aliquam commodo semper. Praesent sollicitudin condimentum arcu, sed elementum sapien pellentesque vitae.</p>
        <p>Sed ultrices risus elit, sit amet bibendum enim consectetur a. Duis lectus nisl, cursus et interdum ac, convallis eu risus. Mauris massa nisi, pretium sit amet mollis ac, dapibus a sapien. Donec aliquam lorem ut tortor aliquam, ac pharetra augue venenatis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas at ipsum volutpat, sagittis orci vitae, tempus tortor. Vestibulum ante leo, rutrum vitae euismod et, molestie vel erat. Vestibulum ac vestibulum quam. Aenean volutpat sem in odio ultrices maximus sit amet in turpis. Nunc porta convallis justo at fringilla. Donec id magna cursus, ultricies ex sit amet, viverra urna. <a href="#">Pellentesque a felis at velit</a> placerat ullamcorper. Duis sit amet leo ac magna facilisis consequat. Phasellus pellentesque, felis sit amet bibendum cursus, felis arcu sollicitudin arcu, sit amet lobortis purus purus eget lorem. Nunc laoreet neque lectus, vel ultrices tortor aliquet ac.</p>
        <p data-height="268" data-theme-id="0" data-slug-hash="RPBQqg" data-default-tab="result" data-user="yusufbkr" class='codepen'></p>
        <p>Donec at elit ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque ut urna quis neque blandit dictum nec non diam. Morbi tempor ullamcorper sapien, feugiat facilisis nisl imperdiet at. Maecenas metus nunc, pharetra sed justo eu, aliquet feugiat quam. Phasellus tellus est, rutrum sed tincidunt nec, aliquam eu sapien. Cras viverra finibus luctus. Suspendisse maximus eleifend varius. Nulla pellentesque quis urna et commodo. Curabitur pharetra sit amet tellus in congue.</p>
        <p>Donec at elit ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque ut urna quis neque blandit dictum nec non diam. Morbi tempor ullamcorper sapien, feugiat facilisis nisl imperdiet at. Maecenas metus nunc, pharetra sed justo eu, aliquet feugiat quam. Phasellus tellus est, rutrum sed tincidunt nec, aliquam eu sapien. Cras viverra finibus luctus. Suspendisse maximus eleifend varius. Nulla pellentesque quis urna et commodo. Curabitur pharetra sit amet tellus in congue.</p>
        <figure>
            <img src="img/post_image.png" alt="Something" class="left" />
        </figure>
        <p>Donec at elit ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque ut urna quis neque blandit dictum nec non diam. Morbi tempor ullamcorper sapien, feugiat facilisis nisl imperdiet at. Maecenas metus nunc, pharetra sed justo eu, aliquet feugiat quam. Phasellus tellus est, rutrum sed tincidunt nec, aliquam eu sapien. Cras viverra finibus luctus. Suspendisse maximus eleifend varius. Nulla pellentesque quis urna et commodo. Curabitur pharetra sit amet tellus in congue.</p>
        <figure>
            <img src="img/post_image.png" alt="Something" class="right" />
        </figure>
        <p>Donec at elit ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque ut urna quis neque blandit dictum nec non diam. Morbi tempor ullamcorper sapien, feugiat facilisis nisl imperdiet at. Maecenas metus nunc, pharetra sed justo eu, aliquet feugiat quam. Phasellus tellus est, rutrum sed tincidunt nec, aliquam eu sapien. Cras viverra finibus luctus. Suspendisse maximus eleifend varius. Nulla pellentesque quis urna et commodo. Curabitur pharetra sit amet tellus in congue.</p>
        <p>Donec at elit ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque ut urna quis neque blandit dictum nec non diam. Morbi tempor ullamcorper sapien, feugiat facilisis nisl imperdiet at. Maecenas metus nunc, pharetra sed justo eu, aliquet feugiat quam. Phasellus tellus est, rutrum sed tincidunt nec, aliquam eu sapien. Cras viverra finibus luctus. Suspendisse maximus eleifend varius. Nulla pellentesque quis urna et commodo. Curabitur pharetra sit amet tellus in congue.</p>
    </article>
@stop

@section('sidebar')

@stop