<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //permisos de usuarios
        Permission::create([
            'name'          => 'Navegar usuarios',
            'slug'          => 'users.index',
            'description'   => 'lista y navegacion de todos los usuarios del sistema',
        ]);


         Permission::create([
            'name'          => 'Ver detalles de usuarios',
            'slug'          => 'users.show',
            'description'   => 'ver dertalle de cada usuarios del sistema',
        ]);


         Permission::create([
            'name'          => 'Edicion de usuarios',
            'slug'          => 'users.edit',
            'description'   => 'editar cualquier dato de un usuario del sistema',
        ]);


         Permission::create([
            'name'          => 'Eliminar usuarios',
            'slug'          => 'users.destroy',
            'description'   => 'eliminar cualquier usuario del sistema',
        ]);

         //Rolles de usuarios
         Permission::create([
            'name'          => 'Navegar roles',
            'slug'          => 'roles.index',
            'description'   => 'lista y navegacion de todos los rol del sistema',
        ]);


         Permission::create([
            'name'          => 'Ver detalles de roles',
            'slug'          => 'roles.show',
            'description'   => 'ver dertalle de cada rol del sistema',
        ]);


         Permission::create([
            'name'          => 'Edicion de roles',
            'slug'          => 'roles.edit',
            'description'   => 'editar cualquier dato de un rol del sistema',
        ]);


         Permission::create([
            'name'          => 'Eliminar roles',
            'slug'          => 'roles.destroy',
            'description'   => 'eliminar cualquier rol del sistema',
        ]);

        Permission::create([
            'name'          => 'Creacion de roles',
            'slug'          => 'roles.create',
            'description'   => 'editar cualquier dato de un rol del sistema',
        ]);

        //Noticias

        Permission::create([
            'name'          => 'Creacion de Noticias',
            'slug'          => 'notice.create',
            'description'   => 'editar cualquier dato de un noticia del sistema',
        ]);

        Permission::create([
            'name'          => 'Navegar Noticias',
            'slug'          => 'notice.index',
            'description'   => 'lista y navegacion de todos los noticia del sistema',
        ]);


         Permission::create([
            'name'          => 'Ver detalles de Noticias',
            'slug'          => 'notice.show',
            'description'   => 'ver dertalle de cada noticia del sistema',
        ]);


         Permission::create([
            'name'          => 'Edicion de Noticias',
            'slug'          => 'notice.edit',
            'description'   => 'editar cualquier dato de un noticia del sistema',
        ]);


         Permission::create([
            'name'          => 'Eliminar Noticias',
            'slug'          => 'notice.destroy',
            'description'   => 'eliminar cualquier noticia del sistema',
        ]);





          //transportadora
          Permission::create([
            'name'          => 'Navegar Transportadora',
            'slug'          => 'empresa.index',
            'description'   => 'lista y navegacion de todos las transportadoras del sistema',
        ]);


         Permission::create([
            'name'          => 'Ver detalles de Transportadora',
            'slug'          => 'empresa.show',
            'description'   => 'ver dertalle de cada transportadora del sistema',
        ]);


         Permission::create([
            'name'          => 'Edicion de Transportadora',
            'slug'          => 'empresa.edit',
            'description'   => 'editar cualquier dato de una transportadora del sistema',
        ]);


         Permission::create([
            'name'          => 'Eliminar transportadora',
            'slug'          => 'empresa.destroy',
            'description'   => 'eliminar cualquier transportadora del sistema',
        ]);

        Permission::create([
            'name'          => 'Creacion de una transportadora',
            'slug'          => 'empresa.create',
            'description'   => 'editar cualquier dato de una transportadora del sistema',
        ]);

         //conductores

         Permission::create([
            'name'          => 'Creacion de conductor',
            'slug'          => 'transportes.create',
            'description'   => 'editar cualquier dato de un conductor del sistema',
        ]);


         Permission::create([
            'name'          => 'Navegar conductor',
            'slug'          => 'transportes.index',
            'description'   => 'lista y navegacion de todos los conductores del sistema',
        ]);


         Permission::create([
            'name'          => 'Ver detalles de conductores',
            'slug'          => 'transportes.show',
            'description'   => 'ver dertalle de cada conductor del sistema',
        ]);


         Permission::create([
            'name'          => 'Edicion de conductor',
            'slug'          => 'transportes.edit',
            'description'   => 'editar cualquier dato de un conductor del sistema',
        ]);


         Permission::create([
            'name'          => 'Eliminar conductor',
            'slug'          => 'transportes.destroy',
            'description'   => 'eliminar cualquier conductor del sistema',
        ]);



         //Generadora

         Permission::create([
            'name'          => 'Creacion de Generadora',
            'slug'          => 'generadoras.create',
            'description'   => 'editar cualquier dato de una generadora del sistema',
        ]);

         Permission::create([
            'name'          => 'Navegar Generadora',
            'slug'          => 'generadoras.index',
            'description'   => 'lista y navegacion de todos los Generadoras del sistema',
        ]);


         Permission::create([
            'name'          => 'Ver detalles de Generadora',
            'slug'          => 'generadoras.show',
            'description'   => 'ver dertalle de cada Generadoras del sistema',
        ]);


         Permission::create([
            'name'          => 'Edicion de Generadora',
            'slug'          => 'generadoras.edit',
            'description'   => 'editar cualquier dato de Generadoras del sistema',
        ]);


         Permission::create([
            'name'          => 'Eliminar Generadora',
            'slug'          => 'generadoras.destroy',
            'description'   => 'eliminar cualquier Generadoras del sistema',
        ]);

         //Propietarios

         Permission::create([
            'name'          => 'Creacion de Propietarios',
            'slug'          => 'propietarios.create',
            'description'   => 'editar cualquier dato de una generadora del sistema',
        ]);


         Permission::create([
            'name'          => 'Navegar Propietario',
            'slug'          => 'propietarios.index',
            'description'   => 'lista y navegacion de todos los Propietarios del sistema',
        ]);


         Permission::create([
            'name'          => 'Ver detalles de Propietario',
            'slug'          => 'propietarios.show',
            'description'   => 'ver dertalle de cada Propietarios del sistema',
        ]);


         Permission::create([
            'name'          => 'Edicion de Propietario',
            'slug'          => 'propietarios.edit',
            'description'   => 'editar cualquier dato de Propietarios del sistema',
        ]);


         Permission::create([
            'name'          => 'Eliminar Propietario',
            'slug'          => 'propietarios.destroy',
            'description'   => 'eliminar cualquier Propietarios del sistema',
        ]);


         //subir archivo

         Permission::create([
            'name'          => 'Creacion de un Archivo',
            'slug'          => 'subirArchivo.create',
            'description'   => 'editar cualquier dato de una archivo del sistema',
        ]);


         Permission::create([
            'name'          => 'Navegar Archivo',
            'slug'          => 'subirArchivo.index',
            'description'   => 'lista y navegacion de todos las archivo del sistema',
        ]);


         Permission::create([
            'name'          => 'Ver detalles de Archivo',
            'slug'          => 'subirArchivo.show',
            'description'   => 'ver dertalle de cada archivo del sistema',
        ]);


         Permission::create([
            'name'          => 'Edicion de Archivo',
            'slug'          => 'subirArchivo.edit',
            'description'   => 'editar cualquier dato de archivo del sistema',
        ]);


         Permission::create([
            'name'          => 'Eliminar Archivo',
            'slug'          => 'subirArchivo.destroy',
            'description'   => 'eliminar cualquier archivo del sistema',
        ]);

        //Servicio

           Permission::create([
            'name'          => 'Creacion de una Servicio',
            'slug'          => 'servicios.create',
            'description'   => 'editar cualquier dato de un servicio del sistema',
        ]);


         Permission::create([
            'name'          => 'Navegar servicio',
            'slug'          => 'servicios.index',
            'description'   => 'lista y navegacion de todos los servicios del sistema',
        ]);


         Permission::create([
            'name'          => 'Ver detalles de un servicio',
            'slug'          => 'serv.show',
            'description'   => 'ver dertalle de cada servicio del sistema',
        ]);


         Permission::create([
            'name'          => 'Edicion de un Servicio',
            'slug'          => 'servicios.edit',
            'description'   => 'editar cualquier dato de un servicio del sistema',
        ]);


         Permission::create([
            'name'          => 'Eliminar servicio',
            'slug'          => 'servicios.destroy',
            'description'   => 'eliminar cualquier servicio del sistema',
        ]);

          //Vehiculo

          Permission::create([
             'name'          => 'Creacion de una Vehiculo',
             'slug'          => 'vehiculo.create',
             'description'   => 'editar cualquier dato de un vehiculo del sistema',
         ]);
    
    
          Permission::create([
             'name'          => 'Navegar Vehiculo',
             'slug'          => 'vehiculo.index',
             'description'   => 'lista y navegacion de todos los vehiculos del sistema',
         ]);
    
    
          Permission::create([
             'name'          => 'Ver detalles de un vehiculo',
             'slug'          => 'vehiculo.show',
             'description'   => 'ver dertalle de cada vehiculo del sistema',
         ]);
    
    
          Permission::create([
             'name'          => 'Edicion de un Vehiculo',
             'slug'          => 'vehiculo.edit',
             'description'   => 'editar cualquier dato de un vehiculo del sistema',
         ]);
    
    
          Permission::create([
             'name'          => 'Eliminar Vehiculo',
             'slug'          => 'vehiculo.destroy',
             'description'   => 'eliminar cualquier vehiculo del sistema',
         ]);      
             


         //Lider

         Permission::create([
            'name'          => 'Escoger lider',
            'slug'          => 'lider.create',
            'description'   => 'crear cualquier dato de un lider del sistema',
        ]);
   
   
         Permission::create([
            'name'          => 'Navegar Lider',
            'slug'          => 'lider.index',
            'description'   => 'lista y navegacion de todos los lideres del sistema',
        ]);
   
   
         Permission::create([
            'name'          => 'Ver detalles de un Lider',
            'slug'          => 'lider.show',
            'description'   => 'ver dertalle de cada lider del sistema',
        ]);
   
   
         Permission::create([
            'name'          => 'Edicion de un Lider',
            'slug'          => 'lider.edit',
            'description'   => 'editar cualquier dato de un lider del sistema',
        ]);
   
   
         Permission::create([
            'name'          => 'Eliminar Lider',
            'slug'          => 'lider.destroy',
            'description'   => 'eliminar cualquier lider del sistema',
        ]);




    }
}
