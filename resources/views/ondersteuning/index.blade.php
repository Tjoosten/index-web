@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Ondersteun Activisme_BE,</h1>
            <p class="lead">
                Ons klein collectief. Draait volledig op vrije giften, eigen inbreng en vrijwilligers.
            </p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-8"> {{-- Content --}}
                <div class="mb-4 card br-card card-shadow">
                    <img class="card-img-top" style="border-top-left-radius: 5px; border-top-right-radius: 5px;" height="200" src="{{ asset('img/banner.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h3>Ondersteun de werking van Activisme_BE</h3>

                        <p>
                            Met ons klein team dat opkomt voor wereldvrede en de rechten van de mens, gebruiken
                            we deze website, activisme.be. als uitvalsbasis. Activisme.be wil een platform bieden om mensen en organisaties
                            samen te brengen en vauit een verenigd front te strijden voor onze belangen die nu naar ons gevoel
                            maar al te vaak op de helling worden gezet. Naast zichtbare aanwezigheid op tal van demonstraties,
                            parades en betogingen, enz... organiseren wij zelf ook straatacties en ludieke (protest)acties. De website activisme.be
                            is de plaats bij uitstek waar we ruchtbaarheid kunnen geven aan deze acties, betogingen en demonstraties.
                        </p>

                        <p>
                            Daarnaast leggen we via activisme.be online petities en petitielijsten aan, die wijds kunnen uitgestuurd worden naar
                            onze achterban. Andere organisaties en bewegingen kunnen gratis gebruik maken van dit platform om petities voor de
                            goede zaak op te stellen en te verspreiden.
                        </p>

                        <p>
                            Om dit alles draaiende te houden, de website up to date te houden, de petities op te stellen en de deur uit te krijgen,
                            hebben we jullie hulp nodig. Aangezien we zonder enige subsidie of overheidssteun werken, is elke gift,
                            hoe klein ook, welkom. Deze giften zullen integraal gebruikt worden om ons webteam te ondersteunen,
                            zodat activisme.be langzaam aan kan uitgroeien tot een platform dat gebruikt kan worden om het beleid,
                            de politici en iedereen die meewerkt aan een samenleving waar steeds meer mensen naar de marge worden verwezen,
                            op het matje en tot verantwoording te roepen.
                        </p>

                        <h3>De vredes caravan</h3>

                        <p>
                            Recent hebben we ook een oude caravan aangekocht, die gebruikt zal worden om verscheidene acties mee te voeren.
                            Zoals kledij, soep en voedig te gaan bedelen over het hele land aan minderbedeelden en daklozen. Daarom dat we
                            de caravan voor verschillende doeleinden zullen gebruiken. Zal het interieur ook volledig moeten aangepast worden,
                            zodat deze uit mobiele eenheden zal bestaan, die gemakkelijk te verplaatsen zijn, volgens het doel dat we uitvoeren.
                            Aangezien we zonder enige subsidie of overheidssteun werken, is elke gift welkom. Het rekeningnummer om ons
                            vrijblijvend te steunen vind u hieronder.
                        </p>
                    </div>
                </div>
            </div> {{-- /END content --}}

            <div class="col-4"> {{-- Social media --}}
                <div class="text-center card br-card card-shadow">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Deel ons:</strong></h4>

                        <p class="mt-4">
                            <a href="" class="social-facebook">
                                <i class="fa fa-facebook fa-2x fa-fw"></i>
                            </a>

                            <a href="" class="social-twitter">
                                <i class="fa fa-twitter fa-2x fa-fw"></i>
                            </a>

                            <a href="" class="social-mail">
                                <i class="fa fa-envelope fa-2x fa-fw"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div> {{-- /END social media --}}
        </div>
    </div>
@endsection