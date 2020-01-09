@extends('tenant.admin.layout.master')
@section('title', 'Weather Icons')
@section('parentPageTitle', 'Icons')
@section('page-style')
<link rel="stylesheet" href="{{asset('tenant-admin/css/weather-icons.min.css')}}">
<style>
ul.weather-demo,
ul.weather-demo2 {
    margin-bottom: 0;
}
ul.weather-demo li,
ul.weather-demo2 li {
    margin-bottom: 20px;
}
ul.weather-demo li i,
ul.weather-demo2 li i {
    font-size: 20px;
    width: 40px;
    color: #0c7ce6;
}
</style>
@stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-warning" role="alert">
            <div class="alert-icon"><i class="zmdi zmdi-notifications"></i></div>
            <strong>Weather Icon</strong> <a href="https://github.com/erikflowers/weather-icons">Weather</a> Click to more icon here
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
            </button>
        </div>
        <div class="card">
            <div class="body">
                <ul class="row list-unstyled weather-demo">
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-day-cloudy-high"></i>day-cloudy-high</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-day-light-wind"></i>day-light-wind</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-day-sleet"></i>day-sleet</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-day-haze"></i>day-haze</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-night-cloudy-high"></i>night-cloud-high</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-night-alt-partly-cloudy"></i>night-alt-partly-cloudy</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-sleet"></i>sleet</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-moonrise"></i>moonrise</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-moonset"></i>moonset</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-night-sleet"></i>night-sleet</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-night-alt-sleet"></i>night-alt-sleet</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-raindrop"></i>raindrop</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-barometer"></i>barometer</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-humidity"></i>humidity</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-na"></i>na (no report)</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-flood"></i>flood</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-sandstorm"></i>sandstorm</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-tsunami"></i>tsunami</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-earthquake"></i>earthquake</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-fire"></i>fire</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-volcano"></i>volcano</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-train"></i>train</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-small-craft-advisory"></i>small-craft-advisory</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-gale-warning"></i>gale-warning</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-storm-warning"></i>storm-warning</li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-hurricane-warning"></i>hurricane-warning</li>
                </ul>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2><strong>Daytime</strong></h2>
            </div>
            <div class="body">
                <ul class="row list-unstyled weather-demo2">
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-sunny"></i>wi-day-sunny</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-cloudy"></i>wi-day-cloudy</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-cloudy-gusts"></i>wi-day-cloudy-gusts</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-cloudy-windy"></i>wi-day-cloudy-windy</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-fog"></i>wi-day-fog</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-hail"></i>wi-day-hail</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-haze"></i>wi-day-haze</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-lightning"></i>wi-day-lightning</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-rain"></i>wi-day-rain</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-rain-mix"></i>wi-day-rain-mix</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-rain-wind"></i>wi-day-rain-wind</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-showers"></i>wi-day-showers</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-sleet"></i>wi-day-sleet</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-sleet-storm"></i>wi-day-sleet-storm</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-snow"></i>wi-day-snow</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-snow-thunderstorm"></i>wi-day-snow-thunderstorm</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-snow-wind"></i>wi-day-snow-wind</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-sprinkle"></i>wi-day-sprinkle</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-storm-showers"></i>wi-day-storm-showers</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-sunny-overcast"></i>wi-day-sunny-overcast</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-thunderstorm"></i>wi-day-thunderstorm</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-windy"></i>wi-day-windy</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-solar-eclipse"></i>wi-solar-eclipse</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-hot"></i>wi-hot</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-cloudy-high"></i>wi-day-cloudy-high</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-light-wind"></i>wi-day-light-wind</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-sunny"></i>wi-day-sunny</span></li>
                </ul>
                
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2><strong>Neutral</strong></h2>
            </div>
            <div class="body">
                <ul class="row list-unstyled weather-demo2">
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-cloud"></i>wi-cloud</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-cloudy"></i>wi-cloudy</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-cloudy-gusts"></i>wi-cloudy-gusts</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-cloudy-windy"></i>wi-cloudy-windy</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-fog"></i>wi-fog</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-hail"></i>wi-hail</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-rain"></i>wi-rain</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-rain-mix"></i>wi-rain-mix</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-rain-wind"></i>wi-rain-wind</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-showers"></i>wi-showers</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-sleet"></i>wi-sleet</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-snow"></i>wi-snow</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-sprinkle"></i>wi-sprinkle</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-storm-showers"></i>wi-storm-showers</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-thunderstorm"></i>wi-thunderstorm</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-snow-wind"></i>wi-snow-wind</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-snow"></i>wi-snow</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-smog"></i>wi-smog</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-smoke"></i>wi-smoke</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-lightning"></i>wi-lightning</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-raindrops"></i>wi-raindrops</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-raindrop"></i>wi-raindrop</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-dust"></i>wi-dust</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-snowflake-cold"></i>wi-snowflake-cold</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-windy"></i>wi-windy</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-strong-wind"></i>wi-strong-wind</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-sandstorm"></i>wi-sandstorm</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-earthquake"></i>wi-earthquake</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-fire"></i>wi-fire</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-flood"></i>wi-flood</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-meteor"></i>wi-meteor</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-tsunami"></i>wi-tsunami</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-volcano"></i>wi-volcano</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-hurricane"></i>wi-hurricane</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-tornado"></i>wi-tornado</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-small-craft-advisory"></i>wi-small-craft-advisory</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-gale-warning"></i>wi-gale-warning</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-storm-warning"></i>wi-storm-warning</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-hurricane-warning"></i>wi-hurricane-warning</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-direction"></i>wi-wind-direction</span></li>
                </ul>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2><strong>Beaufort</strong> Wind Scale</h2>
            </div>
            <div class="body">
                <ul class="row list-unstyled weather-demo2">
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-0"></i>wi-wind-beaufort-0</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-1"></i>wi-wind-beaufort-1</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-2"></i>wi-wind-beaufort-2</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-3"></i>wi-wind-beaufort-3</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-4"></i>wi-wind-beaufort-4</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-5"></i>wi-wind-beaufort-5</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-6"></i>wi-wind-beaufort-6</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-7"></i>wi-wind-beaufort-7</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-8"></i>wi-wind-beaufort-8</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-9"></i>wi-wind-beaufort-9</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-10"></i>wi-wind-beaufort-10</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-11"></i>wi-wind-beaufort-11</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-12"></i>wi-wind-beaufort-12</span></li>
                </ul>                            
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2><strong>Miscellaneous</strong></h2>
            </div>
            <div class="body">
                <ul class="row list-unstyled weather-demo2">
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-alien"></i>wi-alien</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-celsius"></i>wi-celsius</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-fahrenheit"></i>wi-fahrenheit</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-degrees"></i>wi-degrees</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-thermometer"></i>wi-thermometer</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-thermometer-exterior"></i>wi-thermometer-exterior</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-thermometer-internal"></i>wi-thermometer-internal</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-cloud-down"></i>wi-cloud-down</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-cloud-up"></i>wi-cloud-up</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-cloud-refresh"></i>wi-cloud-refresh</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-horizon"></i>wi-horizon</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-horizon-alt"></i>wi-horizon-alt</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-sunrise"></i>wi-sunrise</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-sunset"></i>wi-sunset</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-moonrise"></i>wi-moonrise</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-moonset"></i>wi-moonset</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-refresh"></i>wi-refresh</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-refresh-alt"></i>wi-refresh-alt</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-umbrella"></i>wi-umbrella</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-barometer"></i>wi-barometer</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-humidity"></i>wi-humidity</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-na"></i>wi-na</span></li>
                    <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-train"></i>wi-train</span></li>
                </ul>                            
            </div>
        </div>
    </div>
</div>
@stop