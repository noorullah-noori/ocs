@include('admin.include.header')

<!--main content start-->
<section id="main-content">
<section class="wrapper">
        <div class="col-md-11">
                    <section class="panel">
                        <header class="ui top attached inverted header">
                            Edit User
                        </header>
                        <div class="ui bottom attached segment">
                        <div class="form cmxform form-horizontal ">
                            {!! Form::model($user, ['route' => array('update_user',$user->id)]) !!}
                            {{method_field('PATCH')}}
                            {{csrf_field()}}
                              <div class="form-group ">
                                        <label for="name" class="control-label col-lg-3">Name</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" maxlength="20" id="name" name="name" value="{{$user->name}}" type="text" required>
                                        </div>
                                    </div>
                                        <div class="form-group ">
                                        <label for="email" class="control-label col-lg-3">Email</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="email" value="{{$user->email}}" name="email" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password-confirm" class="control-label col-lg-3">Role</label>

                                        <div class="col-md-6">
                                         <select name="role" class="form-control">
                                                <option value="editor" <?php echo ($user->role=='editor')?'selected':''; ?>>Editor</option>
                                                <option value="author" <?php echo ($user->role=='author')?'selected':''; ?>>Author</option>
                                                <option value="admin" <?php echo ($user->role=='admin')?'selected':''; ?>>Admin</option>
                                            </select>
                                        </div>
                                      </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <a href="{{url('show_reset_form',$user->email)}}" class="ui blue basic label">Reset Password</a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                            <a href="{{url()->previous()}}" class="btn btn-default"  type="button">Cancel</a>
                                        </div>
                                    </div>

                            {!! Form::close() !!}
                        </div>
                        </div>
                    </section>
        </div>

</section>

@include('admin.include.footer')
