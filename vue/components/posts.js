// register
Vue.component('crafted-posts', {
  data: function () {
    return {
      // Get this.posts from global posts
      posts: posts,
    }
  }
});