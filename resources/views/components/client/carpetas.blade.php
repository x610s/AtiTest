<div class="row pages-cliente-panel  justify-content-around py-4">
    
     
   
     <a class="col-2  box rounded
     @if($subcarpetas!==1)
     bg-secondary
     @endif
     " href=" {{route('carpetas.index')}} " >

          <div class="row py-3">
               <i class="fas fa-folder  text-right col-2 "></i>
          <span class="col  mt-1 ">Archivos</span>
          </div>
     </a>
  
     
     <div class="col-2  box rounded">
          <div class="row py-3">
               <i class="fas fa-folder  text-right col-2 "></i>
          
          <span class="col  mt-1">Estados financieros</span>
          </div>
     </div>
     <div class="col-3  box rounded">
          <div class="row py-3">
               <i class="fas fa-folder  text-right col-2 "></i>
          
          <span class="col  mt-1">Actualizaciónes tribuatarias</span>
          </div>
     </div>

</div>