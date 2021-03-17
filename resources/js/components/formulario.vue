<template>
  <form class="form-group shadow row rounded col-10" @submit.prevent="agregar">
    <div class="col">
      <div v-if="validationErrors" class="alert alert-danger">
          <span v-for="error of validationErrors" :key="error.id">
            {{error}}
          </span>
      </div>

      <label for="name">Nombre*</label>
      <input
        type="text"
        class="form-control"
        name="name"
        placeholder="Nombre"
        required
        v-model="nuevoUsuario.name"
      />

      <label for="email">Email*</label>
      <input
        type="text"
        class="form-control"
        name="email"
        placeholder="Email"
        v-model="nuevoUsuario.email"
        required
      />

      <label for="phone">Telefono</label>
      <input
        type="text"
        class="form-control"
        name="phone"
        placeholder="Telefono"
        v-model="nuevoUsuario.phone"
      />

      <label for="company">Compañia</label>
      <input
        type="text"
        class="form-control"
        name="company"
        placeholder="Compañia"
        v-model="nuevoUsuario.company"
      />

      <label for="address">Dirección</label>
      <input
        type="text"
        class="form-control"
        name="address"
        placeholder="Dirección"
        v-model="nuevoUsuario.address"
      />

      <label for="address">Contraseña</label>
      <input
        type="password"
        class="form-control"
        name="password"
        placeholder="Contraseña"
        v-model="nuevoUsuario.password"
      />

      <button class="btn btn-primary my-4" type="submit">
        Guardar <i class="fas fa-save mx-2"></i>
      </button>
    </div>

    <div class="col text-center">
      <!--   <div v-for="(rol, index) of roles" :key="rol.id" class="border">
        <input
          type="checkbox"
          :id="rol.id"
          :value="index + 1"
          v-model="nuevoUsuario.roles"
        />
        <label :for="rol">{{ rol }}</label>
      </div>
      <span>Checked names: {{ nuevoUsuario.roles }}</span> -->
    </div>
  </form>
</template>

<script>
export default {
  data() {
    return {
      validationErrors: null,
      roles: ["Administrador", "Cliente"],
      selectedRoles: [],
      nuevoUsuario: {
        name: "",
        email: "",
        phone: "",
        company: "",
        address: "",
        password: "",
      },
    };
  },
  methods: {
    agregar() {
      /* 
     if(this.nuevoUsuario.passwordConfirm !== this.nuevoUsuario.password){
       console.log('error no coinciden');
       return;
     } */
      const registrar = this.nuevoUsuario;
   

      axios
        .post("/usuario", registrar)
        .then((res) => {
          console.log(res.data)
          this.validationErrors=null;
             this.nuevoUsuario = {
        name: "",
        email: "",
        phone: "",
        company: "",
        address: "",
        password: "",
      };
        }).catch((error) => {
          if (error.response.status == 422) {
            this.dispararAlarma(error);
          }
        });
    },
    dispararAlarma(error){
        this.validationErrors = error.response.data.errors;

        setTimeout(() => {
            this.validationErrors= null;
        }, 4000);
    }
  },
};
</script>