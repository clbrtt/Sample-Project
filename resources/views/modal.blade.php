<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-signin" action="{{route('logintrigname')}}" method="post">
                    @csrf
                    <label for="InputEmail" class="sr-only">EMAIL</label>
                    <input type="text" name="email" id="InputEmail" class="form-control" placeholder="Email" required=""
                        autofocus="">
                    <br>
                    <label for="InputPass" class="sr-only">PASSWORD</label>
                    <input type="password" name="pass" id="InputPass" class="form-control" placeholder="Password"
                        required="">
                    <br>
                    <div class="checkbox mb-3">
                        <label class="remeberme">
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="signin">SIGN IN</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>



<!--FOR REGISTRATION -->
<div class="modal fade" id="exampleregister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-register" action="{{route('Sampleregister')}}" method="post">
                    @csrf
                    <label for="InputEmail" class="sr-only">EMAIL</label>
                    <input type="text" name="email" id="InputEmail" class="form-control" placeholder="Email" required=""
                        autofocus="">
                    <br>
                    <label for="InputPass" class="sr-only">PASSWORD</label>
                    <input type="password" name="pass" id="InputPass" class="form-control" placeholder="Password"
                        required="">
                    <br>
                    <button class="btn btn-lg btn-primary btn-block" type="Register">SUBMIT</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>