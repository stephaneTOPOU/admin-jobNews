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
        <div class="animated fadeIn">
            <div class="row">
                

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Modifier</strong> images 
                        </div>
                        <div class="card-body card-block">
                            <form
                                action=""
                                method="post"
                                enctype="multipart/form-data"
                                class="form-horizontal"
                            >
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label
                                            for="file-multiple-input"
                                            class="form-control-label"
                                            >Choisir image</label
                                        >
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input
                                            type="file"
                                            id="file-multiple-input"
                                            name="file-multiple-input"
                                            multiple=""
                                            class="form-control-file"
                                        />
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <button
                                type="submit"
                                class="btn btn-success btn-sm"
                            >
                                <i class="fa fa-dot-circle-o"></i>
                                Modifier
                            </button>
                            <button
                                type="reset"
                                class="btn btn-danger btn-sm"
                            >
                                <i class="fa fa-ban"></i> Annuler
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- .animated -->
    </div>
    <!-- .content -->
</div>
