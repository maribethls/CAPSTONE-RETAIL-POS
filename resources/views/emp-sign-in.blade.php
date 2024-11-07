<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Osave! | Login</title>

      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset ('import/assets/images/favicon-osave.ico')  }}" />
      <link rel="stylesheet" href="{{ asset ('import/assets/css/backend-plugin.min.css')  }}"/>
      <link rel="stylesheet" href="{{ asset ('import/assets/css/backend.css?v=1.0.0')  }}"/>
      <link rel="stylesheet" href="{{ asset ('import/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')  }}"/>
      <link rel="stylesheet" href="{{ asset ('import/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')  }}"/>
      <link rel="stylesheet" href="{{ asset ('import/assets/vendor/remixicon/fonts/remixicon.css')  }}"/>
  </head>
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->

      <div class="wrapper">
      <section class="login-content">
         <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
               <div class="col-lg-7">
                  <div class="card auth-card">
                     <div class="card-body p-0">
                        <div class="d-flex align-items-center auth-content">
                           <div class="col-lg-6 align-self-center">
                              <div class="p-3">
                                 <h2 class="mb-2 text-dark">Retail O!SAVE</h2>
                                 <p class="text-dark">EMPLOYEE | Login to stay connected.</p>
                                 <form>
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="floating-label form-group">
                                             <input class=" form-control" type="email" placeholder="Email">

                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="floating-label form-group">
                                             <input class=" form-control" type="password" placeholder="Password">

                                          </div>
                                       </div>



                                    </div>
                                    <button type="submit" class="btn btn-danger">Log In</button>

                                 </form>
                              </div>
                           </div>
                           <div class="col-lg-5 ml-2 image-right">
                              <img src="{{ asset ('import/assets/images/login/2.png')  }}" class="img-fluid image-right mr-5" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>

    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset ('import/assets/js/backend-bundle.min.js')  }}"></script>

    <!-- Table Treeview JavaScript -->
    <script src="{{ asset ('import/assets/js/table-treeview.js')  }}"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{ asset ('import/assets/js/customizer.js')  }}"></script>

    <!-- Chart Custom JavaScript -->
    <script async src="{{ asset ('import/assets/js/chart-custom.js')  }}"></script>

    <!-- app JavaScript -->
    <script src="{{ asset ('import/assets/js/app.js')  }}"></script>
  </body>
</html>
