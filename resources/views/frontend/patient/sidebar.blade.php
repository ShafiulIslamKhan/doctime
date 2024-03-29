  <!-- Profile Sidebar -->
  <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
    <div class="profile-sidebar">
        <div class="widget-profile pro-widget-content">
            <div class="profile-info-widget">
                <a href="#" class="booking-doc-img">
                    <img src="frontend/assets/img/patients/patient.jpg" alt="User Image">
                </a>
                <div class="profile-det-info">
                    <h3>{{ Auth::guard( 'patient' ) -> user() -> name }}</h3>
                    <div class="patient-details">
                        <h5><i class="fas fa-birthday-cake"></i> {{ Auth::guard( 'patient' ) -> user() -> email }}</h5>
                        <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> {{ Auth::guard( 'patient' ) -> user() -> mobile }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard-widget">
            @include( 'frontend.patient.menu' )
        </div>

    </div>
</div>
<!-- / Profile Sidebar -->