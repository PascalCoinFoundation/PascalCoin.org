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
                    <h3 class="breadcrumb-title">Get Started</h3>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Get Started</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



</div>

<div id="whatis" class="content-section-b" style="border-top: 0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="abouthead">
                    <!--h3 class="section-heading">Get Started</h3-->
                    <p>So you're interested in PascalCoin? There's a few things you should know before you get started.</p>
                    <div class="mid-sep"><img src="{{asset('images/footsep.png')}}" alt=""></div></div>
            </div>

            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12 text-center get_started1">
                        <div class="single-feature">
                            <div class="get_started_icon">
                                <div class="get_started_rotate get_started_rotate1"></div>
                            </div>
                            <div class="get_started_description">
                                <h3 class="Securehead">Wallets vs Accounts</h3>
                                <div class="midarrow"></div>
                                <p>Like most cryptocurrencies, PascalCoin has a wallet which stores a series of Cryptographic Key-Pairs. If you are not familiar with Cryptocurrencies or Key-Pairs, Key-pairs are comprised of a Private Key and a Public Key. The most important thing you need to know is that you need to protect your Private Key. Don't lose it! Without it, you can't access your coins. Don't share it! If someone else gets hold of your Private Key, they have access to your coins!</p>
                                <p>Unlike most cryptocurrencies, PascalCoins (PASC) aren't stored directly against your Public Key. Instead coins and transactions are stored against a PascalAccount (PASA), and accounts are stored against your Public Key.</p>
                                <p>What Next?</p>
                                <p>Now that you understand the basics, it's time to setup your wallet and get your first coins!</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 text-center get_started2">
                        <div class="single-feature">
                            <div class="get_started_icon">
                                <div class="get_started_rotate get_started_rotate2"></div>
                            </div>
                            <div class="get_started_description">
                                <h3 class="Securehead">Download the PascalCoin Wallet Software</h3>
                                <div class="midarrow"></div>
                                <p>The PascalCoin Wallet software is currently available for Windows and Linux, with clients for macOS and mobile platforms coming soon.</p>
                                <a href="https://github.com/PascalCoin/PascalCoin/releases" target="_blank" role="button"  class="btn button">
                                    <span><i class="fa fa-windows"></i> <i class="fa fa-linux"></i> <i class="fa fa-android"></i></span> Download Wallet
                                </a>
                                <p><a a class="alternate_download" href="https://sourceforge.net/projects/pascalcoin/" target="_blank">Alternate Download Site</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 text-center get_started3">
                        <div class="single-feature">
                            <div class="get_started_icon">
                                <div class="get_started_rotate get_started_rotate3"></div>
                            </div>
                            <div class="get_started_description">
                                <h3 class="Securehead">Wallets vs Accounts</h3>
                                <div class="midarrow"></div>
                                <p>The first time you run the PascalCoin Wallet software, a new KeyPair is automatically generated for you. You can see all your keys by selecting "Private Keys" from the "Project" menu. In this window you can manage all the keys in your wallet. You can have as many as you like and name them to help keep track of each one.</p>
                                <p>It's advisable to use the password protection feature of the wallet, but remember - If you forget your password, you will lose access to your accounts and coins.</p>
                                <p>Remember, never give out your Private Key. There is no reason for someone to need your Private Key. You only ever need to give other people your Public Key, and usually only to have a PASA assigned to it. If someone wants to send you coins, you only need to give them the PascalAccount Number you want coins sent to.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 text-center get_started4">
                        <div class="single-feature">
                            <div class="get_started_icon">
                                <div class="get_started_rotate get_started_rotate4"></div>
                            </div>
                            <div class="get_started_description">
                                <h3 class="Securehead">Get your first PASA</h3>
                                <div class="midarrow"></div>
                                <p>There are a few ways to obtain your first PascalAccount. You can use one of the available web services like getpasa.com, which lets you send PASC and in exchange one PASA will be sent to you using your Public Key. Or you could purchase PASA from pascwallet.com - PASA range from cheap, random account numbers to more expensive, easy to remember account numbers.</p>
                                <p>"But wait! How can I send coins when I don't have any yet?" - Great question! You can use one of the Exchanges currently listing PascalCoin to buy coins. There are several links in the footer of this site. As PascalCoin becomes more popular the ability to purchase coins will become easier. So help spread the word about PascalCoin!</p>
                                <p>"This is starting to feel a bit too hard." - No problem! We have an enthusiastic and friendly community of people available to help, many of which have donated PASA for first time users. Come join our Discord or Telegram Chats and try using the automated Bots to receive a free PASA.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 text-center get_started5">
                        <div class="single-feature">
                            <div class="get_started_icon">
                                <div class="get_started_rotate get_started_rotate5"></div>
                            </div>
                            <div class="get_started_description">
                                <h3 class="Securehead">Get some PASC!</h3>
                                <div class="midarrow"></div>
                                <p>Now that you have your own PASA, it's time to put get some coins in there!</p>
                                <p>Purchasing PASC</p>
                                <p>There are a number of Exchanges available to purchase PASC with more being added in the future. Many don't allow you to purchase with regular currency, so you may need purchase alternate coins like Bitcoin or Ethereum first and then exchange them for PascalCoin.</p>
                                <p>Once you have purchased PASC on an Exchange, its just a matter of transferring it to your new PASA. If you are familiar with other Cryptocurrencies, remember you only have to use your PASA Number for transfers, not your Public Key. It's that simple!</p>
                                <p>Mining PASC</p>
                                <p>If you have adequate hardware, you may wish to mine PASC. There are several options available for mining PASC and you can even effectively dual-mine Ethereum and PascalCoin at the same time. Click the button below to download a guide to mining on Coinotron.</p>
                            </div>
                        </div>
                    </div>




                </div>
            </div>


        </div>

    </div>
</div>

@endsection
