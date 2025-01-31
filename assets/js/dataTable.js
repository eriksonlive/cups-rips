document.addEventListener('alpine:init', () => {
  Alpine.data('dataHandler', () => ({
    data: [],
    offset: 0,
    totalPages: 1,
    totalCount: 0,
    itemsPerPage: 0,
    currentPage: 1,
    loading: true,
    filters: {
      codigo_cups: '',
      descripcion_cups: '',
    },
    urls: {
      getDataTable: '',
      deleteData: '',
    },
    get visiblePages() {
      let pages = [];
      let start = Math.max(1, this.currentPage - 2);
      let end = Math.min(this.totalPages, start + 4);

      if (end - start < 4) {
        start = Math.max(1, end - 4);
      }

      for (let i = start; i <= end; i++) {
        pages.push(i);
      }

      // Asegurar que solo haya tantas páginas como registros
      return pages.length > this.totalPages
        ? pages.slice(0, this.totalPages)
        : pages;
    },
    async fetchPage(page, code = '', desc = '') {
      this.loading = true;
      try {
        const response = await fetch(
          `${this.urls.getDataTable}?page=${page}&code_cups=${code}&desc_cups=${desc}`
        );
        const result = await response.json();

        // Actualizar los datos recibidos
        this.data = result.data;
        this.currentPage = result.page;
        this.offset = result.offset;
        this.totalCount = result.totalCount; // 🔥 Total de registros en la BD
        this.itemsPerPage = result.itemsPerPage; // 🔥 Datos por página desde Symfony

        // ⚡ Calcular correctamente el total de páginas
        this.totalPages = Math.ceil(this.totalCount / this.itemsPerPage);

        // Asegurar que al menos haya una página
        if (this.totalPages < 1) {
          this.totalPages = 1;
        }
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
    async reload() {
      await this.fetchPage(this.page);
    },
    async changePage(page) {
      if (page > 0 && page <= this.totalPages) {
        this.currentPage = page; // ✅ Primero actualizamos la página
        await this.fetchPage(page); // ✅ Luego hacemos la petición
      }
    },
    async filterChange() {
      const form = document.getElementById('form-filter');
      if (form) {
        const formData = new FormData(form);
        console.log([...formData.entries()]);
        await this.fetchPage(
          this.currentPage,
          formData.get('codigo_cups'),
          formData.get('descripcion_cups')
        );
      } else {
        console.error('Formulario no encontrado');
      }
    },
    async deleteChange(id) {
      if (confirm('¿Estás seguro de que deseas eliminar este dato?')) {
        fetch(`${this.urls.deleteData}/${id}`, {
          method: 'DELETE',
        })
          .then((response) => response.json())
          .then((data) => {
            if (data.success) {
              this.$dispatch('alert', {
                success: 'Registro Eliminado Correctamente',
              });
              this.fetchPage(this.page);
            } else {
              // alert('Hubo un error al eliminar el dato.');
              this.$dispatch('alert', {
                error: 'Hubo un error al eliminar el registro.',
              });
            }
          });
      }
    },
  }));
});
