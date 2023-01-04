<!--   Core JS Files   -->
<script src="/admin-template/assets/js/core/jquery.min.js"></script>
<script src="/admin-template/assets/js/core/popper.min.js"></script>
<script src="/admin-template/assets/js/core/bootstrap.min.js"></script>
<script src="/admin-template/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Notifications Plugin    -->
<script src="/admin-template/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="/admin-template/assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="/admin-template/assets/demo/demo.js"></script>
<script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-analytics.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
      apiKey: "AIzaSyDkIjT5VQpliYk_6KIFWkeNa9d-j9lk7Q8",
      authDomain: "sk-web-landing.firebaseapp.com",
      projectId: "sk-web-landing",
      storageBucket: "sk-web-landing.appspot.com",
      messagingSenderId: "544613013744",
      appId: "1:544613013744:web:90b2da72d2ddbe25b78a35",
      measurementId: "G-4V13N1Y5Q9"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
</script>
@stack('script')
