<template>
  <div>
    <div class="container mt-5">
      <div class="row">
        <h1>Search</h1>
        <div class="col-md-12 mx-auto">
          <div class="mb-4">
            <input
              type="text"
              id="searchInput"
              v-model="searchQuery"
              @keyup="handleKeyup"
              class="form-control"
              placeholder="Search name/designation/department"
            />
          </div>
           <div class="row">
            <div class="col-md-6 mb-6" v-for="user in userInfoList" style="margin-bottom: 25px;">
                <div class="card" >
                    <div class="card-body">
                         <p class="card-text">
                    <strong>{{ user.Name }}:</strong>
                  </p>
                  <p class="card-text">{{ user.designation }}</p>
                  <p class="card-text">{{ user.department }}</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      userInfoList: [],
      successMessage: "",
      searchQuery: "",
      loading: false,
    };
  },
  created() {
    this.UserList();
  },
  methods: {
    async UserList() {
      try {
        axios
          .get("/api/user-list/")
          .then((response) => {
            this.userInfoList = response.data.data;

            this.loading = false;
          })
          .catch((error) => {
            this.error = error.message;
            this.loading = false;
          });
      } catch (error) {
        console.error("Error fetching User:", error);
      }
    },
    async handleKeyup() {
      if (this.searchQuery.length < 3) {
        this.UserList();
      }
      this.loading = true;
      try {
        axios
          .get("/api/filter-user-list/", {
            params: {
              searchQuery: this.searchQuery,
            },
          })
          .then((response) => {
            this.userInfoList = response.data.data;

            this.loading = false;
          })
          .catch((error) => {
            this.error = error.message;
            this.loading = false;
          });
      } catch (error) {
        console.error("Error fetching results:", error);
      } finally {
        this.loading = false;
      }
    },
  },
};
</script>
<style scoped>
/* Add any scoped styles here */
</style>
