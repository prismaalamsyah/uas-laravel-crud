<!-- Data Table CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    
    <!-- GSAP Animation CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.3/gsap.min.js"></script>
<script>
     
     $('#table-data').DataTable({
         serverSide: true,
         ajax: {
            url: '/api/get-data',
            type : 'GET',
        }
      });
      

      gsap.from("tr", {duration: 1, x: -100, opacity:0});
      gsap.from("h5 ", {duration: 1.5, y: -100, opacity:0});
      gsap.from("h6 ", {duration: 1, y: -100, opacity:0});
      gsap.from(".alert",{duration:0.5, x:100,opacity:0})
</script>