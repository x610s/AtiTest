<template>
  <form class="form-group shadow row rounded col-12" @submit.prevent="agregar">
    <div class="col">
      <div v-if="validationErrors" class="alert alert-danger">
        <span v-for="error of validationErrors" :key="error.id">
          {{ error }}
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

      <label for="password">Contraseña</label>
      <input
        type="password"
        class="form-control"
        name="password"
        placeholder="Contraseña"
        v-model="nuevoUsuario.password"
      />

      <label for="password_confirmation">Confirmar contraseña</label>
      <input
        type="password"
        class="form-control"
        name="password_confirmation"
        placeholder="Contraseña"
        v-model="nuevoUsuario.password_confirmation"
      />

      <button class="btn btn-primary my-4" type="submit">
        Guardar <i class="fas fa-save mx-2"></i>
      </button>
    </div>

    <div class="col-4 text-center py-2">
      <div v-for="(rol, index) of roles" :key="rol.id" class="btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-block my-2 py-4 btn-outline-primary" >
          <input type="checkbox" :id="rol.id" :value="index + 1" v-model="nuevoUsuario.roles"/>
          <i class="fas fa-user-shield"></i> {{ rol }}
        </label>
      </div>
    </div>

  </form>
</template>

<script>
export default {
  data() {
    return {
      validationErrors: null,
      roles: ["Administrador", "Cliente"],
      nuevoUsuario: {
        roles: [],
        name: "",
        email: "",
        phone: "",
        company: "",
        address: "",
        password: "",
        password_confirmation: "",
      },
    };
  },

  methods: {
    agregar() {
      const registrar = this.nuevoUsuario;
      axios
        .post("/usuario", registrar)
        .then((res) => {
          console.log(res.data);
          this.validationErrors = null;
          this.nuevoUsuario = {
            roles: [],
            name: "",
            email: "",
            phone: "",
            company: "",
            address: "",
            password: "",
          };
        })
        .catch((error) => {
          if (error.response.status == 422 || error.response.status == 500) {
            this.dispararAlarma(error);
          } else {
            console.warn(error);
          }
        });
    },
    dispararAlarma(error) {
      this.validationErrors = error.response.data.errors;
      setTimeout(() => {
        this.validationErrors = null;
      }, 4000);
    },
    isChecked(value) {
     return this.nuevoUsuario.roles.includes(value)
    }
  },

  




};
</script>