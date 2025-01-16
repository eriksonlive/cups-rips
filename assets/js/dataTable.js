document.addEventListener('alpine:init', () => {
    Alpine.data('dataHandler', () => ({
        data: [],
        offset: 0,
        totalPages: 0,
        totalCount: 0,
        itemsPerPage: 0,
        currentPage: 1,
        loading: true,
        filters: {
            codigo_cups: "",
            descripcion_cups: ""
        },
        urls: {
            getDataTable: '',
            deleteData: ''
        },
        async fetchPage(page, code = "", desc = "") {
            this.loading = true;
            try {
                const response = await fetch(`${this.urls.getDataTable}?page=${page}&code_cups=${code}&desc_cups=${desc}`);
                const result = await response.json();
                this.data = result.data;
                this.currentPage = result.page;
                this.offset = result.offset;
                this.totalCount = result.totalCount;
                this.totalPages = result.totalPages;
                this.itemsPerPage = result.itemsPerPage;
            } catch (error) {
                console.error('Error fetching data:', error);
            } finally {
                this.loading = false;
            }
        },
        async init() {
            this.urls.getDataTable = this.$el.getAttribute('data-get');
            const deleteUrl = this.$el.getAttribute('data-delete');

            this.urls.deleteData = deleteUrl.replace('/id', '');

            await this.fetchPage(this.page);
        },
        async reload(){
            await this.fetchPage(this.page);
        },
        async changePage(page) {
            if (page > 0 && page <= this.totalPages) {
                this.currentPage = page;
                await this.fetchPage(this.page);
            }
        },
        async filterChange(){
            const form = document.getElementById('form-filter');
            if (form) {
                const formData = new FormData(form);
                console.log([...formData.entries()]); 
                await this.fetchPage(this.currentPage, formData.get('codigo_cups'), formData.get('descripcion_cups'));
            } else {
                console.error("Formulario no encontrado");
            }
        },
        async deleteChange(id){
            if(confirm('¿Estás seguro de que deseas eliminar este dato?')){
                fetch(`${this.urls.deleteData}/${id}`, {
                    method: 'DELETE',
                })
                .then( response => response.json())
                .then(data => {
                    if (data.success) {
                        this.$dispatch('alert');
                        this.fetchPage(this.page);
                    } else {
                        alert('Hubo un error al eliminar el dato.');
                    }
                });
            }
        }
    }));
});	