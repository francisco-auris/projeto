<template>
<div>
    <div class="w-100 rounded">
        <div class="alert alert-warning">
            <Strong>Alerta</Strong>, <br>
            {{ form }}
        </div>
    </div>
    <div class="w-100 p-2 border rounded">
    <form @submit.prevent="submit">

        <div class="row">
            <div class="col-md-4">
                <label>CNPJ</label>
                <input type="text" v-model="form.cnpj" class="form-control form-control-sm">
            </div>
            <div class="col-md-8">
                <label>Razão social</label>
                <input type="text" v-model="form.razao" class="form-control form-control-sm">
            </div>
            <div class="col-md-8">
                <label>Nome fantasia</label>
                <input type="text" v-model="form.fantasia" class="form-control form-control-sm">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label>Endereço</label>
                <input type="text" v-model="form.endereco" class="form-control form-control-sm">
            </div>
            <div class="col-md-2">
                <label>Número</label>
                <input type="text" v-model="form.numero" class="form-control form-control-sm">
            </div>
            <div class="col-md-2">
                <label>Cidade</label>
                <input type="text" v-model="form.cidade" class="form-control form-control-sm">
            </div>
            <div class="col-md-3">
                <label>Municipio</label>
                <input type="text" v-model="form.municipio" class="form-control form-control-sm">
            </div>
            <div class="col-md-2">
                <label>UF</label>
                <select v-model="form.uf" class="form-control form-control-sm">
                    <option v-for="item in ufs" :value="item">{{ item }}</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="w-100 bg-light rounded p-2">
                    Pessora de contato
                    <div class="row">
                        <div class="col-md-1">
                            <label>(DD)</label>
                            <input type="number" v-model="form.dd" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-4">
                            <label>Telefone</label>
                            <input type="number" v-model="form.telefone" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-4">
                            <label>Nome</label>
                            <input type="text" v-model="form.nome" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-3">
                            <label>E-mail</label>
                            <input type="email" v-model="form.email" class="form-control form-control-sm">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary mt-3">Salvar</button>
                <button @click="limpaForm();" class="btn btn-light mt-3 ml-2" title="Limpar formulario"><i class="icon-trash"></i> Limpar</button>
            </div>
        </div>

    </form>
    </div>
</div>
</template>
<script>
export default {
    
    data() {
        return {
            form: {},
            ufs: ['AC','AL','AM','AP','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO']
        }
    },

    methods: {
        
        limpaForm() {
            //funcção de limpa dados de this.form
            this.form = {};
        },

        submit( event ) {
            console.log(event);
        }

    },

}
</script>