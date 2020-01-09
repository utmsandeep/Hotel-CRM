@extends('tenant.admin.layout.master')
@section('title', 'Themify Icons')
@section('parentPageTitle', 'Icons')
@section('page-style')
<style>
.icon-section [class^="ti-"],
.icon-section [class*=" ti-"]{
    margin-bottom: 16px;
}

.icon-section p {    
    position: relative;
}
.icon-section p [class^="ti-"],
.icon-section p [class*=" ti-"] {
    color: #0c7ce6;
    position: absolute;
    margin-top: 3px;
    transition: .3s;
}
.icon-section .icon-name {
    color: #555;
    margin-left: 35px;
    transition: .3s;
}

.icon-section p:hover [class^="ti-"],
.icon-section p:hover [class*=" ti-"] {
    font-size: 2.2em;
    margin-top: -5px;
}

</style>
@stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Arrows</strong> &amp; Direction Icons</h2>
            </div>
            <div class="body">
                <div class="icon-section row">
        
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-arrow-up"></span><span class="icon-name"> ti-arrow-up</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-arrow-right"></span><span class="icon-name"> ti-arrow-right</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-arrow-left"></span><span class="icon-name"> ti-arrow-left</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-arrow-down"></span><span class="icon-name"> ti-arrow-down</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-arrows-vertical"></span><span class="icon-name"> ti-arrows-vertical</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-arrows-horizontal"></span><span class="icon-name"> ti-arrows-horizontal</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-angle-up"></span><span class="icon-name"> ti-angle-up</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-angle-right"></span><span class="icon-name"> ti-angle-right</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-angle-left"></span><span class="icon-name"> ti-angle-left</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-angle-down"></span><span class="icon-name"> ti-angle-down</span></p></div>	
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-angle-double-up"></span><span class="icon-name"> ti-angle-double-up</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-angle-double-right"></span><span class="icon-name"> ti-angle-double-right</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-angle-double-left"></span><span class="icon-name"> ti-angle-double-left</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-angle-double-down"></span><span class="icon-name"> ti-angle-double-down</span></p></div>					
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-move"></span><span class="icon-name"> ti-move</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-fullscreen"></span><span class="icon-name"> ti-fullscreen</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-arrow-top-right"></span><span class="icon-name"> ti-arrow-top-right</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-arrow-top-left"></span><span class="icon-name"> ti-arrow-top-left</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-arrow-circle-up"></span><span class="icon-name"> ti-arrow-circle-up</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-arrow-circle-right"></span><span class="icon-name"> ti-arrow-circle-right</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-arrow-circle-left"></span><span class="icon-name"> ti-arrow-circle-left</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-arrow-circle-down"></span><span class="icon-name"> ti-arrow-circle-down</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-arrows-corner"></span><span class="icon-name"> ti-arrows-corner</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-split-v"></span><span class="icon-name"> ti-split-v</span></p></div>        
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-split-v-alt"></span><span class="icon-name"> ti-split-v-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-split-h"></span><span class="icon-name"> ti-split-h</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-hand-point-up"></span><span class="icon-name"> ti-hand-point-up</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-hand-point-right"></span><span class="icon-name"> ti-hand-point-right</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-hand-point-left"></span><span class="icon-name"> ti-hand-point-left</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-hand-point-down"></span><span class="icon-name"> ti-hand-point-down</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-back-right"></span><span class="icon-name"> ti-back-right</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-back-left"></span><span class="icon-name"> ti-back-left</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-exchange-vertical"></span><span class="icon-name"> ti-exchange-vertical</span></p></div>
        
                </div> <!-- Arrows Icons -->
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2><strong>Web</strong> App Icons</h2>
            </div>
            <div class="body">
                <div class="icon-section row">
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-wand"></span><span class="icon-name"> ti-wand</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-save"></span><span class="icon-name"> ti-save</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-save-alt"></span><span class="icon-name"> ti-save-alt</span></p></div>                    
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-direction"></span><span class="icon-name"> ti-direction</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-direction-alt"></span><span class="icon-name"> ti-direction-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-user"></span><span class="icon-name"> ti-user</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-link"></span><span class="icon-name"> ti-link</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-unlink"></span><span class="icon-name"> ti-unlink</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-trash"></span><span class="icon-name"> ti-trash</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-target"></span><span class="icon-name"> ti-target</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-tag"></span><span class="icon-name"> ti-tag</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-desktop"></span><span class="icon-name"> ti-desktop</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-tablet"></span><span class="icon-name"> ti-tablet</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-mobile"></span><span class="icon-name"> ti-mobile</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-email"></span><span class="icon-name"> ti-email</span></p></div>	
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-star"></span><span class="icon-name"> ti-star</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-spray"></span><span class="icon-name"> ti-spray</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-signal"></span><span class="icon-name"> ti-signal</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-shopping-cart"></span><span class="icon-name"> ti-shopping-cart</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-shopping-cart-full"></span><span class="icon-name"> ti-shopping-cart-full</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-settings"></span><span class="icon-name"> ti-settings</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-search"></span><span class="icon-name"> ti-search</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-zoom-in"></span><span class="icon-name"> ti-zoom-in</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-zoom-out"></span><span class="icon-name"> ti-zoom-out</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-cut"></span><span class="icon-name"> ti-cut</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-ruler"></span><span class="icon-name"> ti-ruler</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-ruler-alt-2"></span><span class="icon-name"> ti-ruler-alt-2</span></p></div>			
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-ruler-pencil"></span><span class="icon-name"> ti-ruler-pencil</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-ruler-alt"></span><span class="icon-name"> ti-ruler-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-bookmark"></span><span class="icon-name"> ti-bookmark</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-bookmark-alt"></span><span class="icon-name"> ti-bookmark-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-reload"></span><span class="icon-name"> ti-reload</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-plus"></span><span class="icon-name"> ti-plus</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-minus"></span><span class="icon-name"> ti-minus</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-close"></span><span class="icon-name"> ti-close</span></p></div>			
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-pin"></span><span class="icon-name"> ti-pin</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-pencil"></span><span class="icon-name"> ti-pencil</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-pencil-alt"></span><span class="icon-name"> ti-pencil-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-paint-roller"></span><span class="icon-name"> ti-paint-roller</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-paint-bucket"></span><span class="icon-name"> ti-paint-bucket</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-na"></span><span class="icon-name"> ti-na</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-medall"></span><span class="icon-name"> ti-medall</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-medall-alt"></span><span class="icon-name"> ti-medall-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-marker"></span><span class="icon-name"> ti-marker</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-marker-alt"></span><span class="icon-name"> ti-marker-alt</span></p></div>                    
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-lock"></span><span class="icon-name"> ti-lock</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-unlock"></span><span class="icon-name"> ti-unlock</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-location-arrow"></span><span class="icon-name"> ti-location-arrow</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout"></span><span class="icon-name"> ti-layout</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layers"></span><span class="icon-name"> ti-layers</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layers-alt"></span><span class="icon-name"> ti-layers-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-key"></span><span class="icon-name"> ti-key</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-image"></span><span class="icon-name"> ti-image</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-heart"></span><span class="icon-name"> ti-heart</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-heart-broken"></span><span class="icon-name"> ti-heart-broken</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-hand-stop"></span><span class="icon-name"> ti-hand-stop</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-hand-open"></span><span class="icon-name"> ti-hand-open</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-hand-drag"></span><span class="icon-name"> ti-hand-drag</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-flag"></span><span class="icon-name"> ti-flag</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-flag-alt"></span><span class="icon-name"> ti-flag-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-flag-alt-2"></span><span class="icon-name"> ti-flag-alt-2</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-eye"></span><span class="icon-name"> ti-eye</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-import"></span><span class="icon-name"> ti-import</span></p></div>			
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-export"></span><span class="icon-name"> ti-export</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-cup"></span><span class="icon-name"> ti-cup</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-crown"></span><span class="icon-name"> ti-crown</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-comments"></span><span class="icon-name"> ti-comments</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-comment"></span><span class="icon-name"> ti-comment</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-comment-alt"></span><span class="icon-name"> ti-comment-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-thought"></span><span class="icon-name"> ti-thought</span></p></div>			
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-clip"></span><span class="icon-name"> ti-clip</span></p></div>                    
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-check"></span><span class="icon-name"> ti-check</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-check-box"></span><span class="icon-name"> ti-check-box</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-camera"></span><span class="icon-name"> ti-camera</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-announcement"></span><span class="icon-name"> ti-announcement</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-brush"></span><span class="icon-name"> ti-brush</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-brush-alt"></span><span class="icon-name"> ti-brush-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-palette"></span><span class="icon-name"> ti-palette</span></p></div>			
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-briefcase"></span><span class="icon-name"> ti-briefcase</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-bolt"></span><span class="icon-name"> ti-bolt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-bolt-alt"></span><span class="icon-name"> ti-bolt-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-blackboard"></span><span class="icon-name"> ti-blackboard</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-bag"></span><span class="icon-name"> ti-bag</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-world"></span><span class="icon-name"> ti-world</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-wheelchair"></span><span class="icon-name"> ti-wheelchair</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-car"></span><span class="icon-name"> ti-car</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-truck"></span><span class="icon-name"> ti-truck</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-timer"></span><span class="icon-name"> ti-timer</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-ticket"></span><span class="icon-name"> ti-ticket</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-thumb-up"></span><span class="icon-name"> ti-thumb-up</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-thumb-down"></span><span class="icon-name"> ti-thumb-down</span></p></div>                    
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-stats-up"></span><span class="icon-name"> ti-stats-up</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-stats-down"></span><span class="icon-name"> ti-stats-down</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-shine"></span><span class="icon-name"> ti-shine</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-shift-right"></span><span class="icon-name"> ti-shift-right</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-shift-left"></span><span class="icon-name"> ti-shift-left</span></p></div>                    
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-shift-right-alt"></span><span class="icon-name"> ti-shift-right-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-shift-left-alt"></span><span class="icon-name"> ti-shift-left-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-shield"></span><span class="icon-name"> ti-shield</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-notepad"></span><span class="icon-name"> ti-notepad</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-server"></span><span class="icon-name"> ti-server</span></p></div>                    
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-pulse"></span><span class="icon-name"> ti-pulse</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-printer"></span><span class="icon-name"> ti-printer</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-power-off"></span><span class="icon-name"> ti-power-off</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-plug"></span><span class="icon-name"> ti-plug</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-pie-chart"></span><span class="icon-name"> ti-pie-chart</span></p></div>                    
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-panel"></span><span class="icon-name"> ti-panel</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-package"></span><span class="icon-name"> ti-package</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-music"></span><span class="icon-name"> ti-music</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-music-alt"></span><span class="icon-name"> ti-music-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-mouse"></span><span class="icon-name"> ti-mouse</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-mouse-alt"></span><span class="icon-name"> ti-mouse-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-money"></span><span class="icon-name"> ti-money</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-microphone"></span><span class="icon-name"> ti-microphone</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-menu"></span><span class="icon-name"> ti-menu</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-menu-alt"></span><span class="icon-name"> ti-menu-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-map"></span><span class="icon-name"> ti-map</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-map-alt"></span><span class="icon-name"> ti-map-alt</span></p></div>                    
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-location-pin"></span><span class="icon-name"> ti-location-pin</span></p></div>                    
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-light-bulb"></span><span class="icon-name"> ti-light-bulb</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-info"></span><span class="icon-name"> ti-info</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-infinite"></span><span class="icon-name"> ti-infinite</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-id-badge"></span><span class="icon-name"> ti-id-badge</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-hummer"></span><span class="icon-name"> ti-hummer</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-home"></span><span class="icon-name"> ti-home</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-help"></span><span class="icon-name"> ti-help</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-headphone"></span><span class="icon-name"> ti-headphone</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-harddrives"></span><span class="icon-name"> ti-harddrives</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-harddrive"></span><span class="icon-name"> ti-harddrive</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-gift"></span><span class="icon-name"> ti-gift</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-game"></span><span class="icon-name"> ti-game</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-filter"></span><span class="icon-name"> ti-filter</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-files"></span><span class="icon-name"> ti-files</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-file"></span><span class="icon-name"> ti-file</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-zip"></span><span class="icon-name"> ti-zip</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-folder"></span><span class="icon-name"> ti-folder</span></p></div>			
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-envelope"></span><span class="icon-name"> ti-envelope</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-dashboard"></span><span class="icon-name"> ti-dashboard</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-cloud"></span><span class="icon-name"> ti-cloud</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-cloud-up"></span><span class="icon-name"> ti-cloud-up</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-cloud-down"></span><span class="icon-name"> ti-cloud-down</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-clipboard"></span><span class="icon-name"> ti-clipboard</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-calendar"></span><span class="icon-name"> ti-calendar</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-book"></span><span class="icon-name"> ti-book</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-bell"></span><span class="icon-name"> ti-bell</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-basketball"></span><span class="icon-name"> ti-basketball</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-bar-chart"></span><span class="icon-name"> ti-bar-chart</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-bar-chart-alt"></span><span class="icon-name"> ti-bar-chart-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-archive"></span><span class="icon-name"> ti-archive</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-anchor"></span><span class="icon-name"> ti-anchor</span></p></div>                   
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-alert"></span><span class="icon-name"> ti-alert</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-alarm-clock"></span><span class="icon-name"> ti-alarm-clock</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-agenda"></span><span class="icon-name"> ti-agenda</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-write"></span><span class="icon-name"> ti-write</span></p></div>                    
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-wallet"></span><span class="icon-name"> ti-wallet</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-video-clapper"></span><span class="icon-name"> ti-video-clapper</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-video-camera"></span><span class="icon-name"> ti-video-camera</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-vector"></span><span class="icon-name"> ti-vector</span></p></div>                    
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-support"></span><span class="icon-name"> ti-support</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-stamp"></span><span class="icon-name"> ti-stamp</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-slice"></span><span class="icon-name"> ti-slice</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-shortcode"></span><span class="icon-name"> ti-shortcode</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-receipt"></span><span class="icon-name"> ti-receipt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-pin2"></span><span class="icon-name"> ti-pin2</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-pin-alt"></span><span class="icon-name"> ti-pin-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-pencil-alt2"></span><span class="icon-name"> ti-pencil-alt2</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-eraser"></span><span class="icon-name"> ti-eraser</span></p></div>			
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-more"></span><span class="icon-name"> ti-more</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-more-alt"></span><span class="icon-name"> ti-more-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-microphone-alt"></span><span class="icon-name"> ti-microphone-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-magnet"></span><span class="icon-name"> ti-magnet</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-line-double"></span><span class="icon-name"> ti-line-double</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-line-dotted"></span><span class="icon-name"> ti-line-dotted</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-line-dashed"></span><span class="icon-name"> ti-line-dashed</span></p></div>                    
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-ink-pen"></span><span class="icon-name"> ti-ink-pen</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-info-alt"></span><span class="icon-name"> ti-info-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-help-alt"></span><span class="icon-name"> ti-help-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-headphone-alt"></span><span class="icon-name"> ti-headphone-alt</span></p></div>                    
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-gallery"></span><span class="icon-name"> ti-gallery</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-face-smile"></span><span class="icon-name"> ti-face-smile</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-face-sad"></span><span class="icon-name"> ti-face-sad</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-credit-card"></span><span class="icon-name"> ti-credit-card</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-comments-smiley"></span><span class="icon-name"> ti-comments-smiley</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-time"></span><span class="icon-name"> ti-time</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-share"></span><span class="icon-name"> ti-share</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-share-alt"></span><span class="icon-name"> ti-share-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-rocket"></span><span class="icon-name"> ti-rocket</span></p></div>                    
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-new-window"></span><span class="icon-name"> ti-new-window</span></p></div>                    
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-rss"></span><span class="icon-name"> ti-rss</span></p></div>                    
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-rss-alt"></span><span class="icon-name"> ti-rss-alt</span></p></div>                                
                </div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2><strong>Control</strong> Icons</h2>
            </div>
            <div class="body">
                <div class="icon-section row">
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-control-stop"></span><span class="icon-name"> ti-control-stop</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-control-shuffle"></span><span class="icon-name"> ti-control-shuffle</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-control-play"></span><span class="icon-name"> ti-control-play</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-control-pause"></span><span class="icon-name"> ti-control-pause</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-control-forward"></span><span class="icon-name"> ti-control-forward</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-control-backward"></span><span class="icon-name"> ti-control-backward</span></p></div>	
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-volume"></span><span class="icon-name"> ti-volume</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-control-skip-forward"></span><span class="icon-name"> ti-control-skip-forward</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-control-skip-backward"></span><span class="icon-name"> ti-control-skip-backward</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-control-record"></span><span class="icon-name"> ti-control-record</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-control-eject"></span><span class="icon-name"> ti-control-eject</span></p></div>
                </div> <!-- Control Icons -->
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2><strong>Text</strong> Editor</h2>
            </div>
            <div class="body">
                <div class="icon-section row">                    
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-paragraph"></span><span class="icon-name"> ti-paragraph</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-uppercase"></span><span class="icon-name"> ti-uppercase</span></p></div>                    
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-underline"></span><span class="icon-name"> ti-underline</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-text"></span><span class="icon-name"> ti-text</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-Italic"></span><span class="icon-name"> ti-Italic</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-smallcap"></span><span class="icon-name"> ti-smallcap</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-list"></span><span class="icon-name"> ti-list</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-list-ol"></span><span class="icon-name"> ti-list-ol</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-align-right"></span><span class="icon-name"> ti-align-right</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-align-left"></span><span class="icon-name"> ti-align-left</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-align-justify"></span><span class="icon-name"> ti-align-justify</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-align-center"></span><span class="icon-name"> ti-align-center</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-quote-right"></span><span class="icon-name"> ti-quote-right</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-quote-left"></span><span class="icon-name"> ti-quote-left</span></p></div>                    
                </div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2><strong>Layout</strong> Icons</h2>
            </div>
            <div class="body">
                <div class="icon-section row">
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-width-full"></span><span class="icon-name"> ti-layout-width-full</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-width-default"></span><span class="icon-name"> ti-layout-width-default</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-width-default-alt"></span><span class="icon-name"> ti-layout-width-default-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-tab"></span><span class="icon-name"> ti-layout-tab</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-tab-window"></span><span class="icon-name"> ti-layout-tab-window</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-tab-v"></span><span class="icon-name"> ti-layout-tab-v</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-tab-min"></span><span class="icon-name"> ti-layout-tab-min</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-slider"></span><span class="icon-name"> ti-layout-slider</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-slider-alt"></span><span class="icon-name"> ti-layout-slider-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-sidebar-right"></span><span class="icon-name"> ti-layout-sidebar-right</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-sidebar-none"></span><span class="icon-name"> ti-layout-sidebar-none</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-sidebar-left"></span><span class="icon-name"> ti-layout-sidebar-left</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-placeholder"></span><span class="icon-name"> ti-layout-placeholder</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-menu"></span><span class="icon-name"> ti-layout-menu</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-menu-v"></span><span class="icon-name"> ti-layout-menu-v</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-menu-separated"></span><span class="icon-name"> ti-layout-menu-separated</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-menu-full"></span><span class="icon-name"> ti-layout-menu-full</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-media-right"></span><span class="icon-name"> ti-layout-media-right</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-media-right-alt"></span><span class="icon-name"> ti-layout-media-right-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-media-overlay"></span><span class="icon-name"> ti-layout-media-overlay</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-media-overlay-alt"></span><span class="icon-name"> ti-layout-media-overlay-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-media-overlay-alt-2"></span><span class="icon-name"> ti-layout-media-overlay-alt-2</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-media-left"></span><span class="icon-name"> ti-layout-media-left</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-media-left-alt"></span><span class="icon-name"> ti-layout-media-left-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-media-center"></span><span class="icon-name"> ti-layout-media-center</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-media-center-alt"></span><span class="icon-name"> ti-layout-media-center-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-list-thumb"></span><span class="icon-name"> ti-layout-list-thumb</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-list-thumb-alt"></span><span class="icon-name"> ti-layout-list-thumb-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-list-post"></span><span class="icon-name"> ti-layout-list-post</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-list-large-image"></span><span class="icon-name"> ti-layout-list-large-image</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-line-solid"></span><span class="icon-name"> ti-layout-line-solid</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-grid4"></span><span class="icon-name"> ti-layout-grid4</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-grid3"></span><span class="icon-name"> ti-layout-grid3</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-grid2"></span><span class="icon-name"> ti-layout-grid2</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-grid2-thumb"></span><span class="icon-name"> ti-layout-grid2-thumb</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-cta-right"></span><span class="icon-name"> ti-layout-cta-right</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-cta-left"></span><span class="icon-name"> ti-layout-cta-left</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-cta-center"></span><span class="icon-name"> ti-layout-cta-center</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-cta-btn-right"></span><span class="icon-name"> ti-layout-cta-btn-right</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-cta-btn-left"></span><span class="icon-name"> ti-layout-cta-btn-left</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-column4"></span><span class="icon-name"> ti-layout-column4</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-column3"></span><span class="icon-name"> ti-layout-column3</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-column2"></span><span class="icon-name"> ti-layout-column2</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-accordion-separated"></span><span class="icon-name"> ti-layout-accordion-separated</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-accordion-merged"></span><span class="icon-name"> ti-layout-accordion-merged</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-accordion-list"></span><span class="icon-name"> ti-layout-accordion-list</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-widgetized"></span><span class="icon-name"> ti-widgetized</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-widget"></span><span class="icon-name"> ti-widget</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-widget-alt"></span><span class="icon-name"> ti-widget-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-view-list"></span><span class="icon-name"> ti-view-list</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-view-list-alt"></span><span class="icon-name"> ti-view-list-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-view-grid"></span><span class="icon-name"> ti-view-grid</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-upload"></span><span class="icon-name"> ti-upload</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-download"></span><span class="icon-name"> ti-download</span></p></div>	
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-loop"></span><span class="icon-name"> ti-loop</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-sidebar-2"></span><span class="icon-name"> ti-layout-sidebar-2</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-grid4-alt"></span><span class="icon-name"> ti-layout-grid4-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-grid3-alt"></span><span class="icon-name"> ti-layout-grid3-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-grid2-alt"></span><span class="icon-name"> ti-layout-grid2-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-column4-alt"></span><span class="icon-name"> ti-layout-column4-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-column3-alt"></span><span class="icon-name"> ti-layout-column3-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-layout-column2-alt"></span><span class="icon-name"> ti-layout-column2-alt</span></p></div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2><strong>Brand</strong> Icons</h2>
            </div>
            <div class="body">
                <div class="icon-section row">                    
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-flickr"></span><span class="icon-name"> ti-flickr</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-flickr-alt"></span><span class="icon-name"> ti-flickr-alt</span></p></div>			
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-instagram"></span><span class="icon-name"> ti-instagram</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-google"></span><span class="icon-name"> ti-google</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-github"></span><span class="icon-name"> ti-github</span></p></div>                    
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-facebook"></span><span class="icon-name"> ti-facebook</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-dropbox"></span><span class="icon-name"> ti-dropbox</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-dropbox-alt"></span><span class="icon-name"> ti-dropbox-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-dribbble"></span><span class="icon-name"> ti-dribbble</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-apple"></span><span class="icon-name"> ti-apple</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-android"></span><span class="icon-name"> ti-android</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-yahoo"></span><span class="icon-name"> ti-yahoo</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-trello"></span><span class="icon-name"> ti-trello</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-stack-overflow"></span><span class="icon-name"> ti-stack-overflow</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-soundcloud"></span><span class="icon-name"> ti-soundcloud</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-sharethis"></span><span class="icon-name"> ti-sharethis</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-sharethis-alt"></span><span class="icon-name"> ti-sharethis-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-reddit"></span><span class="icon-name"> ti-reddit</span></p></div>                    
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-microsoft"></span><span class="icon-name"> ti-microsoft</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-microsoft-alt"></span><span class="icon-name"> ti-microsoft-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-linux"></span><span class="icon-name"> ti-linux</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-jsfiddle"></span><span class="icon-name"> ti-jsfiddle</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-joomla"></span><span class="icon-name"> ti-joomla</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-html5"></span><span class="icon-name"> ti-html5</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-css3"></span><span class="icon-name"> ti-css3</span></p></div>	
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-drupal"></span><span class="icon-name"> ti-drupal</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-wordpress"></span><span class="icon-name"> ti-wordpress</span></p></div>		
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-tumblr"></span><span class="icon-name"> ti-tumblr</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-tumblr-alt"></span><span class="icon-name"> ti-tumblr-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-skype"></span><span class="icon-name"> ti-skype</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-youtube"></span><span class="icon-name"> ti-youtube</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-vimeo"></span><span class="icon-name"> ti-vimeo</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-vimeo-alt"></span><span class="icon-name"> ti-vimeo-alt</span></p></div>			
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-twitter"></span><span class="icon-name"> ti-twitter</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-twitter-alt"></span><span class="icon-name"> ti-twitter-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-linkedin"></span><span class="icon-name"> ti-linkedin</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-pinterest"></span><span class="icon-name"> ti-pinterest</span></p></div>                    
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-pinterest-alt"></span><span class="icon-name"> ti-pinterest-alt</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-themify-logo"></span><span class="icon-name"> ti-themify-logo</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-themify-favicon"></span><span class="icon-name"> ti-themify-favicon</span></p></div>
                    <div class="icon col-sm-4 col-xs-6"><p><span class="ti-themify-favicon-alt"></span><span class="icon-name"> ti-themify-favicon-alt</span></p></div>                    
                </div>
            </div>
        </div>                            
    </div>
</div>
@stop