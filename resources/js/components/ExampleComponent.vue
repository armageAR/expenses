<template>
   <table class="table" id="example">
     <thead class="thead-dark">
       <tr>
         <th scope="col">#</th>
         <th scope="col">Name</th>
         <th scope="col">Date</th>
      
       </tr>
     </thead>
     <tbody>
       <tr v-for= "document  in documents">
         <th scope="row">{{ document.id}}</th>
         <td>{{document.name}}</td>
         <td>#</td>
        
       </tr>
       
     </tbody>
   </table>

</template>

<script>
    import datables from 'datatables.net'
    export default {
        mounted() {
            this.getDocuments()
        },
        data(){
            return{
                documents: []
            }
        },
        methods:{
            mytable(){
                $(function() {
                    $('#table-documents').DataTable();
                });   
            },
           
           getDocuments(){
                var urlDocuments= "api/documents";
                axios.get(urlDocuments).then(response=>{
                    this.documents = response.data;
                    this.mytable()
                });   
            },
        }
        
    }
</script>
