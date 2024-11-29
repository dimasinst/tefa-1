<section id="Product" class="bg-light">
    <div class="container py-5">
        <h2 class="text-center mb-4 pt-5 text-uppercase fw-bold text-dark">Produk Kami</h2>

        <ul class="nav nav-pills justify-content-center mb-4" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link product-nav-link" href="{{ route('categories.valve') }}" id="pills-cvt-tab" role="tab" aria-controls="pills-cvt">
                    Valve Spring/Klep
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link product-nav-link" href="{{ route('categories.cvt') }}" id="pills-valve-tab" role="tab" aria-controls="pills-valve">
                    CVT Spring
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link product-nav-link" href="{{ route('categories.clutch') }}" id="pills-clutch-tab" role="tab" aria-controls="pills-clutch">
                    Clutch Spring/Kopling
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link product-nav-link" href="{{ route('categories.sentri') }}" id="pills-sentri-tab" role="tab" aria-controls="pills-sentri">
                    Clutch Weight/Sentri
                </a>
            </li>
        </ul>
    </div>
</section>

<style>
    /* Section Background */
    #Product {
        color: white;
    }

    /* Section Title */
    #Product h2 {
        font-size: 2.5rem;
        color: #fff;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
    }

    /* Navigation Pills Styling */
    .nav-pills .nav-link {
        color: #ff6600;
        background-color: white;
        border: 2px solid #ff6600;
        border-radius: 50px;
        padding: 12px 25px;
        font-weight: bold;
        font-size: 1rem;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .nav-pills .nav-link.active {
        color: #fff;
        background-color: #ff6600;
        border-color: #ff6600;
        box-shadow: 0 8px 20px rgba(255, 102, 0, 0.4);
    }

    .nav-pills .nav-link:hover {
        color: white;
        background-color: #ff9900;
        border-color: #ff9900;
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(255, 153, 0, 0.4);
    }

    /* Spacing Adjustments */
    .nav-pills {
        gap: 1rem;
    }

    /* Smooth transition */
    .product-nav-link {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .product-nav-link:hover {
        transform: translateY(-5px);
    }
</style>
