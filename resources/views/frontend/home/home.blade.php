@include('frontend.header.header1')
@include('frontend.header.header2')
@include('frontend.header.header3')
@include('frontend.header.header4')
@include('frontend.header.header5')
@include('frontend.header.header6')
@include('frontend.header.header7')
@include('frontend.header.header8')
@include('frontend.header.header9')
@include('frontend.header.header10')

@include('frontend.side.side')

<div id="right-panel" class="right-panel">
    @include('frontend.head.head')

    @include('frontend.head.head2')
    

    <div class="content mt-3">

        <div class="col-sm-6 col-lg-4">
            <div class="card text-white bg-flat-color-2">
                <div class="card-body pb-0" style="height:150px;">
                    <h4 class="mb-0">
                        <span class="count">{{$nbcategorie}}</span>
                    </h4>
                    <p class="text-light">Catégorie(s)</p>
                </div>

            </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-4">
            <div class="card text-white bg-flat-color-1">
                <div class="card-body pb-0" style="height:150px;">
                    <h4 class="mb-0">
                        <span class="count">{{$nboffre}}</span>
                    </h4>
                    <p class="text-light">Offre(s)</p>
                </div>

            </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-4">
            <div class="card text-white bg-flat-color-4">
                <div class="card-body pb-0" style="height:150px;">
                    <h4 class="mb-0">
                        <span class="count">{{$nonvld}}</span>
                    </h4>
                    <p class="text-light">Offre(s) non-validée(s)</p>
                </div>
            </div>
        </div>
        <!--/.col-->

    </div> 
    
    <!-- .content -->
</div><!-- /#right-panel -->

@include('frontend.footer.footer1')
@include('frontend.footer.footer2')
@include('frontend.footer.footer3')
@include('frontend.footer.footer4')
@include('frontend.footer.footer5')
@include('frontend.footer.footer6')
@include('frontend.footer.footer7')
@include('frontend.footer.footer8')
@include('frontend.footer.footer9')
@include('frontend.footer.footer10')
@include('frontend.footer.footer11')
@include('frontend.footer.footer12')