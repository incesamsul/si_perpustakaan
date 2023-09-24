<div class="row">
    <div class="col-lg-12">
        <div class="card ">
            <div class="card-header">
                <h4>Profile Pengguna</h4>
            </div>
            <div class="card-body">
                <ul class="list-unstyled list-unstyled-border">
                    <li class="media">
                        <div class="media-body text-center">
                            <img src="{{ auth()->user()->foto == '' ? asset('stisla/assets/img/avatar/avatar-1.png') : asset('data/foto_profile/' . auth()->user()->foto) }}"
                                alt="..." class="avatar-img rounded-circle profile-pict">
                            <div class="media-title"></div>
                            <div class="font-weight-600 text-muted text-small"></div>
                            <div class="font-weight-600 text-muted text-small my-3">{{ auth()->user()->name }}</div>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-body my-3">
                            <a href="" class="btn bg-main text-white btn-lg btn-block btn-icon-split"
                                data-toggle="modal" data-target="#modal">
                                <i class="fas fa-camera"></i> Ganti Foto Profile
                            </a>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-body my-3">
                            <div class="float-right">
                                <div class="font-weight-600 text-muted text-small">general</div>
                            </div>
                            <div class="media-title">Jenis Profile</div>
                        </div>
                    </li>

                    <li class="media">
                        <div class="media-body my-3">
                            <div class="float-right">
                                <div class="font-weight-600 text-muted text-small">03-09-2018</div>
                            </div>
                            <div class="media-title">Tanggal Dibuat</div>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-body my-3">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Ganti Kata sandi"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn bg-main text-white" type="button">Ganti</button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


</div>
