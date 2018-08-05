//add product

var products = [
  {id: 1, name: 'Angular', description: 'User Story 1', priority:'Critical', status:'Open', devArea:'MasterFrame', subDevArea: 'Portal Frames', estTimeframe: '4 Weeks', actTimeframe: '3 Weeks', startDate:'2016/09/16', endDate: '-', price: 100},
    {id: 2, name: 'Angular', description: 'User Story 2', priority:'Critical', status:'Open', devArea:'MasterFrame', subDevArea: 'Portal Frames', estTimeframe: '4 Weeks', actTimeframe: '3 Weeks', startDate:'2016/09/16', endDate: '-', price: 100},
    {id: 3, name: 'Angular', description: 'User Story 3', priority:'Critical', status:'Open', devArea:'MasterFrame', subDevArea: 'Portal Frames', estTimeframe: '4 Weeks', actTimeframe: '3 Weeks', startDate:'2016/09/16', endDate: '-', price: 100}
];

function findProduct (productId) {
  return products[findProductKey(productId)];
};

function findProductKey (productId) {
  for (var key = 0; key < products.length; key++) {
    if (products[key].id == productId) {
      return key;
    }
  }
};

var List = Vue.extend({
  template: '#product-list',
  data: function () {
    return {products: products, searchKey: ''};
  }
});

var Product = Vue.extend({
  template: '#product',
  data: function () {
    return {product: findProduct(this.$route.params.product_id)};
  }
});

var ProductEdit = Vue.extend({
  template: '#product-edit',
  data: function () {
    return {product: findProduct(this.$route.params.product_id)};
  },
  methods: {
    updateProduct: function () {
      var product = this.$get('product');
      products[findProductKey(product.id)] = {
        id: product.id,
        name: product.name,
        description: product.description,
        priority: product.priority,
        status: product.status,
        devArea: product.devArea,
        subArea: product.subDevArea,
        estTimeframe: product.estTimeframe,
        actTimeframe: product.actTimeframe,
        startDate: product.startDate,
        endDate: product.endDate,
        price: product.price
      };
      router.go('/');
    }
  }
});

var ProductDelete = Vue.extend({
  template: '#product-delete',
  data: function () {
    return {product: findProduct(this.$route.params.product_id)};
  },
  methods: {
    deleteProduct: function () {
      products.splice(findProductKey(this.$route.params.product_id), 1);
      router.go('/');
    }
  }
});

var AddProduct = Vue.extend({
  template: '#add-product',
  data: function () {
    return {product: {name: '', description: '', priority: '', status: '', devArea: '', subDevArea: '', estTimeframe: '', actTimeframe: '', startDate: '', endDate: '', price: ''}
    }
  },
  methods: {
    createProduct: function() {
      var product = this.$get('product');
      products.push({
        id: Math.random().toString().split('.')[1],
        name: product.name,
        description: product.description,
        priority: product.priority,
        status: product.status,
        devArea: product.devArea,
        subArea: product.subDevArea,
        estTimeframe: product.estTimeframe,
        actTimeframe: product.actTimeframe,
        startDate: product.startDate,
        endDate: product.endDate,
        price: product.price
      });
      router.go('/');
    }
  }
});

var router = new VueRouter();
router.map({
  '/': {component: List},
  '/product/:product_id': {component: Product, name: 'product'},
  '/add-product': {component: AddProduct},
  '/product/:product_id/edit': {component: ProductEdit, name: 'product-edit'},
  '/product/:product_id/delete': {component: ProductDelete, name: 'product-delete'}
})
  .start(Vue.extend({}), '#app');


// Menu Bar


function openNav() {
    document.getElementById("mySidenav").style.width = "70%";
    // document.getElementById("flipkart-navbar").style.width = "50%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "rgba(0,0,0,0)";
}


/*login*/

<script type="application/javascript"> 
addEventListener("load", function() { 
    setTimeout(hideURLbar, 0); },
    false);
    function hideURLbar(){ window.scrollTo(0,1); }
    </script>



