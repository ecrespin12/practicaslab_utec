   <?php
          $user=  $this->session->userdata("usuario");
   ?>
   
   <!-- sidebar menu -->

   <!-- menu estudiante -->
   <?php if($user=="estudiante"):?>
   <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
           <div class="menu_section">
             <ul class="nav side-menu">
               <li><a href="<?php echo base_url();?>estudiante/Inicio"><i class="fa fa-home"></i> Inicio</a></li>
               <li><a href="<?php echo base_url();?>estudiante/practica"><i class="fa fa-home"></i> Practicas</a></li>
               <li><a href="<?php echo base_url();?>Dashboard"><i class="fa fa-home"></i> Cerrar Sesión</a></li>
            
             </ul>
           </div>
         </div>
<?php elseif($user=="lab"):?>
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
           <div class="menu_section">
             <ul class="nav side-menu">
             <li><a href="<?php echo base_url();?>laboratorio/Inicio"><i class="fa fa-home"></i> Inicio</a></li>
             <li><a href="<?php echo base_url();?>laboratorio/ControlLaboratorio"><i class="fa fa-home"></i> Control Laboratorio</a></li>
               </li>
               <li><a href="<?php echo base_url();?>laboratorio/ProgramarPractica"><i class="fa fa-home"></i> Programar Practica</a></li>
               <li><a href="<?php echo base_url();?>laboratorio/Informe"><i class="fa fa-home"></i> Informes</a></li>
               <li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i> Cerrar Sesion</a></li>     
             </ul>
           </div>
         </div>
<?php elseif($user=="admin"):?>
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
           <div class="menu_section">
             <ul class="nav side-menu">
             <li><a href="<?php echo base_url();?>admin/Inicio"><i class="fa fa-home"></i> Inicio</a></li>
             <li><a href="<?php echo base_url();?>admin/Edificio"><i class="fa fa-home"></i> Edificios</a></li>
             <li><a href="<?php echo base_url();?>admin/EncargadoLaboratorio"><i class="fa fa-home"></i> Encargados</a></li>
             <li><a href="<?php echo base_url();?>admin/Laboratorio"><i class="fa fa-home"></i> Laboratorios</a></li>
             <li><a href="<?php echo base_url();?>admin/Inicio"><i class="fa fa-home"></i> Mi Perfil</a></li>
    
               <li><a href="<?php echo base_url();?>Dashboard"><i class="fa fa-home"></i> Cerrar Sesion</a></li>     
             </ul>
           </div>
         </div>
  <?php endif ;?>  
    <!-- sidebar menu -->


  </div>
</div>
