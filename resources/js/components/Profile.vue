
<template>
    <section class="content">
        <div id="main">
    <div class="row">
        <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 l6">
                        <h5 class="breadcrumbs-title"><span>Users edit</span></h5>
                    </div>
                    <div class="col s12 m6 l6 right-align-md">
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">User</a></li>
                            <li class="breadcrumb-item active">Users Edit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <!-- users edit start -->
                <div class="section users-edit">
                    <div class="card">
                        <div class="card-content">
                            <!-- <div class="card-body"> -->
                            <ul class="tabs mb-2 row">
                                <li class="tab" >
                                    <a class="display-flex align-items-center active" id="account-tab" href="#account"> <i class="material-icons mr-1">person_outline</i><span>Account</span> </a>
                                </li>
                                <li class="tab" style="display:none;">
                                    <a class="display-flex align-items-center" id="information-tab" href="#information"> <i class="material-icons mr-2">error_outline</i><span>Information</span> </a>
                                </li>
                            </ul>
                            <div class="divider mb-3"></div>
                            <div class="row">
                                <div class="col s12" id="account">
                                    <!-- users edit media object start -->
                                    <div class="media display-flex align-items-center mb-2">
                                        <a class="mr-2" href="#">
                                            <img src="/app-assets/images/avatar/avatar-11.png" alt="users avatar" class="z-depth-4 circle" height="64" width="64" />
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading mt-0">Avatar</h5>
                                            <div class="user-edit-btns display-flex">
                                                <a href="#" class="btn-small indigo">Change</a>
                                                <a href="#" class="btn-small btn-light-pink">Reset</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- users edit media object ends -->
                                    <!-- users edit account form start -->
                                    <form id="accountForm" @click.prevent="updateInfo" class="form-horizontal">
                                        <div class="row">
                                            <div class="col s12 m6">
                                                <div class="row">
                                                    <div class="col s12 input-field">
                                                        <!-- <input id="username" name="username" type="text" class="validate" value="dean3004" data-error=".errorTxt1" /> -->
                                                        <input type="text" v-model="form.name" class="validate" id="inputName" placeholder="username" :class="{ 'is-invalid': form.errors.has('name') }" data-error=".errorTxt1">
                                                         <has-error :form="form" field="name"></has-error>
                                                        <small class="errorTxt2"></small>

                                                        <label for="username">Username</label>
                                                        
                                                    </div>
                                                    <div class="col s12 input-field">
                                                        <input id="name" name="name" type="text" class="validate" value="Dean Stanley" data-error=".errorTxt2" />
                                                        <label for="name">Name</label>
                                                        <small class="errorTxt2"></small>
                                                    </div>
                                                    <div class="col s12 input-field">
                                                        <!-- <input id="email" name="email" type="email" class="validate" value="deanstanley@gmail.com" data-error=".errorTxt3" /> -->
                                                        <input type="email" v-model="form.email" class="validate" id="inputEmail" placeholder="Email"  :class="{ 'is-invalid': form.errors.has('email') } "  data-error=".errorTxt3">
                                                         <has-error :form="form" field="email"></has-error>
                                                        <label for="email">E-mail</label>
                                                        <small class="errorTxt3"></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col s12 m6">
                                                <div class="row">
                                                    <div class="col s12 input-field">
                                                        <select>
                                                            <option>User</option>
                                                            <option>Staff</option>
                                                        </select>
                                                        <label>Role</label>
                                                    </div>
                                                    <div class="col s12 input-field">
                                                        <select>
                                                            <option>Active</option>
                                                            <option>Banned</option>
                                                            <option>Close</option>
                                                        </select>
                                                        <label>Status</label>
                                                    </div>
                                                    <div class="col s12 input-field">
                                                        <input id="company" name="company" type="text" class="validate" />
                                                        <label for="company">Company</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                           <div class="col s12 display-flex justify-content-end mt-3">
                                          <button type="submit" class="btn indigo">
                                            Save changes</button>
                                          <button type="button" class="btn btn-light">Cancel</button>
                                        </div>
                                        </div>
                                    </form>
                                    <!-- users edit account form ends -->
                                </div>
                                <div class="col s12" id="information" style="display:none;">
                                    <!-- users edit Info form start -->
                                    <form id="infotabForm">
                                        <div class="row">
                                            <div class="col s12 m6">
                                                <div class="row">
                                                    <div class="col s12">
                                                        <h6 class="mb-2"><i class="material-icons mr-1">link</i>Social Links</h6>
                                                    </div>
                                                    <div class="col s12 input-field">
                                                        <input class="validate" type="text" value="https://www.twitter.com/" />
                                                        <label>Twitter</label>
                                                    </div>
                                                    <div class="col s12 input-field">
                                                        <input class="validate" type="text" value="https://www.facebook.com/" />
                                                        <label>Facebook</label>
                                                    </div>
                                                    <div class="col s12 input-field">
                                                        <input class="validate" type="text" />
                                                        <label>Google+</label>
                                                    </div>
                                                    <div class="col s12 input-field">
                                                        <input id="linkedin" name="linkedin" class="validate" type="text" />
                                                        <label for="linkedin">LinkedIn</label>
                                                    </div>
                                                    <div class="col s12 input-field">
                                                        <input class="validate" type="text" value="https://www.instagram.com/" />
                                                        <label>Instagram</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col s12 m6">
                                                <div class="row">
                                                    <div class="col s12">
                                                        <h6 class="mb-4"><i class="material-icons mr-1">person_outline</i>Personal Info</h6>
                                                    </div>
                                                    <div class="col s12 input-field">
                                                        <input id="" name="datepicker" type="text" class="" placeholder="Pick a birthday">
                                                        <label for="datepicker">Birth date</label>
                                                        <small class="errorTxt4"></small>
                                                    </div>
                                                    <div class="col s12 input-field">
                                                        <select id="accountSelect">
                                                            <option>USA</option>
                                                            <option>India</option>
                                                            <option>Canada</option>
                                                        </select>
                                                        <label>Country</label>
                                                    </div>
                                                    <div class="col s12">
                                                        <label>Languages</label>
                                                        <select class="browser-default" id="users-language-select2" multiple="multiple">
                                                            <option value="English" selected>English</option>
                                                            <option value="Spanish">Spanish</option>
                                                            <option value="French">French</option>
                                                            <option value="Russian">Russian</option>
                                                            <option value="German">German</option>
                                                            <option value="Arabic" selected>Arabic</option>
                                                            <option value="Sanskrit">Sanskrit</option>
                                                        </select>
                                                    </div>
                                                    <div class="col s12 input-field">
                                                        <input id="phonenumber" type="text" class="validate" value="(+656) 254 2568" />
                                                        <label for="phonenumber">Phone</label>
                                                    </div>
                                                    <div class="col s12 input-field">
                                                        <input id="address" name="address" type="text" class="validate" data-error=".errorTxt5" />
                                                        <label for="address">Address</label>
                                                        <small class="errorTxt5"></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col s12">
                                                <div class="input-field">
                                                    <input id="websitelink" name="websitelink" type="text" class="validate" />
                                                    <label for="websitelink">Website</label>
                                                </div>
                                                <label>Favourite Music</label>
                                                <div class="input-field">
                                                    <select class="browser-default" id="users-music-select2" multiple="multiple">
                                                        <option value="Rock">Rock</option>
                                                        <option value="Jazz" selected>Jazz</option>
                                                        <option value="Disco">Disco</option>
                                                        <option value="Pop">Pop</option>
                                                        <option value="Techno">Techno</option>
                                                        <option value="Folk" selected>Folk</option>
                                                        <option value="Hip hop">Hip hop</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s12">
                                                <label>Favourite movies</label>
                                                <div class="input-field">
                                                    <select class="browser-default" id="users-movies-select2" multiple="multiple">
                                                        <option value="The Dark Knight" selected>The Dark Knight </option>
                                                        <option value="Harry Potter" selected>Harry Potter</option>
                                                        <option value="Airplane!">Airplane!</option>
                                                        <option value="Perl Harbour">Perl Harbour</option>
                                                        <option value="Spider Man">Spider Man</option>
                                                        <option value="Iron Man" selected>Iron Man</option>
                                                        <option value="Avatar">Avatar</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s12 display-flex justify-content-end mt-3">
                                          <button type="submit" class="btn indigo">
                                            Save changes</button>
                                          <button type="button" class="btn btn-light">Cancel</button>
                                        </div>
                                        </div>
                                    </form>
                                    <!-- users edit Info form ends -->
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <div class="container-fluid" style="display:none">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link" href="#activity" data-toggle="tab">Activity</a></li>
                                <li class="nav-item"><a class="nav-link active show" href="#settings" data-toggle="tab">Settings</a></li>
                                <li class="nav-item"><a class="nav-link" href="#change-password" data-toggle="tab">Change Password</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body" >
                            <div class="tab-content">
                                <!-- Activity Tab -->
                                <div class="tab-pane" id="activity">
                                    <h3 class="text-center">Display User Activity</h3>
                                </div>
                                <!-- Setting Tab -->
                                <div class="tab-pane active show" id="settings">
                                    <form @click.prevent="updateInfo" class="form-horizontal">
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-2 control-label">Name</label>

                                            <div class="col-sm-12">
                                            <input type="" v-model="form.name" class="form-control" id="inputName" placeholder="Name" :class="{ 'is-invalid': form.errors.has('name') }">
                                            <has-error :form="form" field="name"></has-error>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                            <div class="col-sm-12">
                                                <input type="email" v-model="form.email" class="form-control" id="inputEmail" placeholder="Email"  :class="{ 'is-invalid': form.errors.has('email') }">
                                                <has-error :form="form" field="email"></has-error>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-success">Update Profile</button>
                                                <div class="float-right d-sm-inline text-muted">Member since: <span>{{form.created_at|myDate}}</span></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- Setting Tab -->
                                <div class="tab-pane" id="change-password">
                                    <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="current_password" class="col-sm-2 control-label">Current Password</label>

                                        <div class="col-sm-12">
                                            <input type="password"
                                                v-model="form.current_password"
                                                class="form-control"
                                                id="current_password"
                                                placeholder="Current Password"
                                                :class="{ 'is-invalid': form.errors.has('current_password') }"
                                            >
                                            <has-error :form="form" field="current_password"></has-error>
                                        
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="new_password" class="col-sm-2 control-label">New Password</label>

                                        <div class="col-sm-12">
                                            <input type="password"
                                                v-model="form.new_password"
                                                class="form-control"
                                                id="new_password"
                                                placeholder="New Password"
                                                :class="{ 'is-invalid': form.errors.has('new_password') }"
                                            >
                                            <has-error :form="form" field="new_password"></has-error>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="confirm_password" class="col-sm-2 control-label">Confirm Password</label>

                                        <div class="col-sm-12">
                                            <input type="password"
                                                v-model="form.confirm_password"
                                                class="form-control"
                                                id="confirm_password"
                                                placeholder="Confirm Password"
                                                :class="{ 'is-invalid': form.errors.has('confirm_password') }"
                                            >
                                            <has-error :form="form" field="confirm_password"></has-error>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-12">
                                        <button @click.prevent="updatePassword" type="submit" class="btn btn-success">Update Password</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
            </div>
            <!-- end tabs -->
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        data(){
            return {
                 form: new Form({
                    id:'',
                    name : '',
                    email: '',
                    password: '',
                    created_at: ''
                })
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{

            updateInfo(){
                this.$Progress.start();
                if(this.form.password == ''){
                    this.form.password = undefined;
                }
                this.form.put('api/profile')
                .then((data)=>{
                    this.$Progress.finish();
                    Toast.fire({
                        icon: 'success',
                        title: data.data.message
                    });
                })
                .catch((data) => {
                    this.$Progress.fail();

                    Toast.fire({
                        icon: 'error',
                        title: 'Some error occured! Please try again'
                    });
                });
            },

            updatePassword(){
                this.$Progress.start();
                this.form.post('api/change-password')
                .then((data)=>{
                    //  Fire.$emit('AfterCreate');
                    this.$Progress.finish();
                    this.form.current_password = '';
                    this.form.new_password = '';
                    this.form.confirm_password = '';

                    Toast.fire({
                        icon: 'success',
                        title: data.data.message
                    });
                })
                .catch(() => {
                    this.$Progress.fail();

                    Toast.fire({
                        icon: 'error',
                        title: 'Some error occured! Please try again'
                    });
                });
            }
        },

        created() {

            this.$Progress.start();

            axios.get("api/profile")
            .then(({ data }) => (this.form.fill(data.data)));
            
            this.$Progress.finish();
        }
    }
</script>
