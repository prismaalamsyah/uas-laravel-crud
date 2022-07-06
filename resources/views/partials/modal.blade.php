<!-- Start Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Update Data Laptop</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
           <div class="form-group mt-2">
             <label>Merek Laptop</label>
             <input type="hidden" class="form-control" name="id" id="id_update" >
             <input type="text" class="form-control" id ="merek_laptop" name ="merek_laptop" required>
           </div>
           <div class="form-group mt-2">
             <label for="nama">Seri Laptop</label>
             <input type="text" class="form-control" id ="seri_laptop" name ="seri_laptop"  required>
           </div>
           <div class="form-group mt-2">
             <label for="prodi">Tahun Produksi</label>
             <input type="text" class="form-control" id ="tahun" name ="tahun"  required>
           </div>
           <div class="modal-footer mt-3">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             <button type="submit" id="submit_update" name="submit_update" class="btn btn-primary">Save Update</button>
           </div>
       </div>

       
     </div>
   </div>
 </div>