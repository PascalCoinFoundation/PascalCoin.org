@extends('layouts.main')

@section('body-id')
    contact
@endsection

@section('content')
    <!-- FullScreen -->
    <div class="intro-header intro-subheader">

        <div id="slider_container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h3 class="breadcrumb-title">Funding Transparency</h3>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Funding Transparency</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="abouthead">
                        <!--h3 class="section-heading">Whitepapers</h3-->
                        <p>With PIP-0011 the foundation gets 20% of the miner reward to drive further development of PascalCoin. This page will serve as a report of all received and spent funds.</p>
                        <div class="mid-sep"><img src="{{asset('images/footsep.png')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-section-a" style="border-top: 0; padding-bottom: 0; padding-top: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                            <div class="col-sm-12">
                                <p>All funds used by the foundation can be found in account <code>1000-84</code>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-section-a" style="margin-top: 0; padding: 0">

        <div class="container">
            <div style="padding: 10px; border-bottom: 1px dashed #c0c0c0">
            From Block: <input type="text">
            To Block: <input type="text">
                <button class="btn btn-primary">Filter</button>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>To Account</th>
                    <th>Amount</th>
                    <th>Payload</th>
                </tr>
                </thead>
                    <tr style="cursor: pointer;">
                        <td>2017-12-22 18:33:11</td>
                        <td>12345-67</td>
                        <td>120.0001 PASC</td>
                        <td>Website</td>
                    </tr>
            </table>
        </div>
    </div>

@endsection