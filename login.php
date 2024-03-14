<!DOCTYPE html>
<html>
  <head>
    <title>Menu with CSS</title>
    <link rel="stylesheet" href="login.css" />
    <script src="menu-functions.js"></script>
  </head>
  <body>
    <a
      ><img
        href="javascript:void(0)"
        onclick="hideandUnhide()"
        id="shoppinglogo"
        src="https://static.vecteezy.com/system/resources/previews/019/787/018/original/shopping-cart-icon-shopping-basket-on-transparent-background-free-png.png"
    /></a>

    <h1 id="web-title"><img
        src="https://jbugear.com/cdn/shop/products/JBU-D1_300x300.png?v=1589290106"
    />JBU Online Store</h1>
    

    <div id="cart" href = "jbustore.php"></div>
    <ul>
      <li class="menu-item">
        <a href="#" class="drp">Books </a>
        <div class="menu-content">
          <a href="add_book.php">Add Book</a>
          <a href="remove_book.php">Remove Book</a
          ><a href="display_books.php">Display all Books</a>
        </div>
      </li>
      <li class="menu-item">
        <a href="#" class="drp">Books </a>
        <div class="menu-content">
          <a href="add_book.php">Add Book</a
          ><a href="remove_book.php">Remove Book</a
          ><a href="display_books.php">Display all Books</a>
        </div>
      </li>
      <li class="menu-item">
        <a href="#" class="drp">Users </a>
        <div class="menu-content">
          <a href="add_user.php">Add User</a
          ><a href="remove_user.php">Remove User</a
          ><a href="display_users.php">Display all Users</a>
        </div>
      </li>
    </ul>
    <p>Welcome to JBU's Online store - open for faculty/staff and students!</p>
    <table>
      <tr class="product-item">
        <td>
          <img
            src="https://m.media-amazon.com/images/I/71vFKBpKakL._AC_UF894,1000_QL80_.jpg"
          />
          <a href="javascript:void(0)" onclick="popupfunction('1')">Macbook</a>
          <br />
          <button value="Macbook" onclick="shoppingCart(value)">
            Add To Cart
          </button>
        </td>
        <td>
          <img
            src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/refurb-ipad-pro-12-wificell-spacegray-2021?wid=1144&hei=1144&fmt=jpeg&qlt=90&.v=1674663709258"
          /><a href="javascript:void(0)" onclick="popupfunction('2')">IPad</a>
          <br />
          <button value="IPad" onclick="shoppingCart(value)">
            Add To Cart
          </button>
        </td>
      </tr>
      <tr class="product-item">
        <td>
          <img
            src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-card-40-iphone15prohero-202309_FMT_WHH?wid=508&hei=472&fmt=p-jpg&qlt=95&.v=1693086369818"
          /><a href="javascript:void(0)" onclick="popupfunction('3')">IPhone</a>
          <br />
          <button value="IPhone" onclick="shoppingCart(value)">
            Add To Cart
          </button>
        </td>
        <td>
          <img
            src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/s9-case-unselect-gallery-1-202309_FMT_WHH?wid=752&hei=720&fmt=p-jpg&qlt=80&.v=1693524702398"
          /><a href="javascript:void(0)" onclick="popupfunction('4')"
            >Apple Watch</a
          >
          <br />
          <button value="Apple Watch" onclick="shoppingCart(value)">
            Add To Cart
          </button>
        </td>
      </tr>
    </table>
    <div id="popup1" class="white_content">
      <p align="center">
        <br /><br />
        <img
          src="https://m.media-amazon.com/images/I/71vFKBpKakL._AC_UF894,1000_QL80_.jpg"
          width="30%"
        /><br />MacBook<br /><br />Price:$1000<br />Rating: 5<br />

        <a href="javascript:void(0)" onclick="popupclose('1')">close window</a>
      </p>
    </div>
    <div id="popup2" class="white_content">
      <p align="center">
        <br /><br />
        <img
          src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/refurb-ipad-pro-12-wificell-spacegray-2021?wid=1144&hei=1144&fmt=jpeg&qlt=90&.v=1674663709258"
          width="30%"
        /><br />IPad<br /><br />Price:$1000<br />Rating: 5<br />

        <a href="javascript:void(0)" onclick="popupclose('2')">close window</a>
      </p>
    </div>
    <div id="popup3" class="white_content">
      <p align="center">
        <br /><br />
        <img
          src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-card-40-iphone15prohero-202309_FMT_WHH?wid=508&hei=472&fmt=p-jpg&qlt=95&.v=1693086369818"
          width="30%"
        /><br />IPhone<br /><br />Price:$1000<br />Rating: 5<br />

        <a href="javascript:void(0)" onclick="popupclose('3')">close window</a>
      </p>
    </div>
    <div id="popup4" class="white_content">
      <p align="center">
        <br /><br />
        <img
          src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/s9-case-unselect-gallery-1-202309_FMT_WHH?wid=752&hei=720&fmt=p-jpg&qlt=80&.v=1693524702398"
          width="30%"
        /><br />Apple Watch<br /><br />Price:$1000<br />Rating: 5<br />

        <a href="javascript:void(0)" onclick="popupclose('4')">close window</a>
      </p>
    </div>
    <div id="fade1" class="black_content"></div>
    <div id="fade2" class="black_content"></div>
    <div id="fade3" class="black_content"></div>
    <div id="fade4" class="black_content"></div>
    <div id="shoppingFade" class="black_content"></div>
  </body>
</html>