@extends('Master.Master')

        <nav>
            <div class="nav-link" id="navlink">
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">ABOUT</a></li>
                    <li class="nav-item dropdown show">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        PRODUCT
                        </a>
                        <div class="dropdown-menu show" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item">Smart Phone</a>
                            <a class="dropdown-item">Laptop</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item">All Product</a>
                        </div>

                    </li>
                    <input type="text" id="search_bar" placeholder="Search...">
                    <li><a href="">CONTACT</a></li>
                    <li><a href="admin/product">LOGIN</a></li>
                </ul>
            </div>
        </nav>
