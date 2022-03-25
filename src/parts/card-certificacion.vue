<template>
    <div>
        <div class="card-certificacion">
            <div @click="abrir()" class="card-certificacion-hover">
                <a class="btn-border-white">+ INFO</a>
            </div>
            <slot></slot>
        </div>
        <div id="modal" class="modal" tabindex="-1" role="dialog" :style="{display: status}">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <button type="button" class="close" @click="close()">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <slot></slot>
                            </div>
                            <div class="col-sm-7">
                                <slot name="content"></slot>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
    .modal{
        align-items: center;
        background-color: rgba(1,1,1,0.5);
    }
</style>
<script>
export default {
    data() {
        return {
            status: 'none'
        }
    },
    methods: {
        abrir(){
            this.status='flex';
        },
        close(){
            this.status='none';
        }
    },
}
</script>
