@extends('layouts.default.index')
@section('content')
    <div id="root">
        <div class="bg-bg-home bg-cover">
            <nav class="bg-transparent">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16 items-center">
                        <div class="flex">
                            <div class="shrink-0 flex items-center pl-5"><a class="text-xl" href="/lppom"><img
                                        src="/src/assets/img/logo.png" class="w-28" alt=""></a></div>
                            <div class="hidden space-x-3 sm:-my-px sm:ml-10 sm:flex"></div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="mt-10 text-center text-main-50 basis-[10%]">
                <h1 class=" text-4xl font-bold">Kembangkan Bisnis Anda</h1>
                <h2 class="text-white text-3xl font-bold">Bersama Kami</h2>
                <p class="text-white px-3 mt-3">Dengan memenuhi regulasi pemerintah indonesia dan standar halal dunia
            </div>
            <main class="bg-white relative">
                <div class=" mt-10 rounded-t-lg basis-[90%]  px-3">
                    <div class="w-full lg:w-2/4 mx-auto relative h-60">
                        <div
                            class="px-5 py-3  text-center lg:bg-white lg:absolute lg:-top-8 lg:w-full lg:shadow-lg lg:rounded-lg">
                            <h1 class="text-lg font-bold">Cek produk halal</h1>
                            <p>Acuan sertifikasi halal : 23000</p>
                            <div class="flex flex-col items-center sm:flex-row">
                                <div class="MuiFormControl-root w-full  css-1869usk-MuiFormControl-root"><label
                                        class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-standard MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-standard css-aqpgxn-MuiFormLabel-root-MuiInputLabel-root"
                                        data-shrink="false" id="demo-simple-select-standard-label">Cari
                                        berdasarkan</label>
                                    <div
                                        class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl  css-a3l6o-MuiInputBase-root-MuiInput-root-MuiSelect-root">
                                        <div tabindex="0" role="button" aria-expanded="false"
                                            aria-haspopup="listbox"
                                            aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard"
                                            id="demo-simple-select-standard"
                                            class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                            <span class="notranslate">​</span></div><input aria-hidden="true"
                                            tabindex="-1"
                                            class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput"
                                            value=""><svg
                                            class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon"
                                            focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                            data-testid="ArrowDropDownIcon">
                                            <path d="M7 10l5 5 5-5z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div
                                    class="MuiFormControl-root MuiTextField-root w-full css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                    <label
                                        class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-standard MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-standard css-aqpgxn-MuiFormLabel-root-MuiInputLabel-root"
                                        data-shrink="false" for="standard-basic" id="standard-basic-label">Masukan
                                        kata kunci</label>
                                    <div
                                        class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-1ptx2yq-MuiInputBase-root-MuiInput-root">
                                        <input aria-invalid="false" id="standard-basic" type="text"
                                            class="MuiInputBase-input MuiInput-input css-1x51dt5-MuiInputBase-input-MuiInput-input"
                                            value=""></div>
                                </div>
                            </div><button
                                class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium css-sghohy-MuiButtonBase-root-MuiButton-root"
                                tabindex="0" type="button"
                                style="background-color: rgb(138, 225, 45); margin-top: 15px;">Cari<span
                                    class="MuiTouchRipple-root css-8je8zh-MuiTouchRipple-root"></span></button>
                        </div>
                    </div>
                    <div class="">
                        <h1 class="text-xl text-main">Produk Halal</h1>
                        <h4 class="">Produk - Produk Halal yang Baru Ditambahkan</h4>
                        <div class="flex w-[90%] lg:w-full overflow-x-scroll ">
                            <div class="min-w-[180px] sm:min-w-[200px] bg-cover  sm:h-56  mb-3 border mr-5 p-3"
                                style="background-image: url(&quot;/src/assets/img/produk1-edit.png&quot;);">
                                <div class="flex flex-col  h-full justify-between">
                                    <h1 class="text-white mb-5">Cimory Minuman Yogurt Rasa Original (Original Yogurt
                                        Drink)</h1><button
                                        class="bg-white rounded-lg w-3/4 mx-auto px-3 py-1">Detail</button>
                                </div>
                            </div>
                            <div class="min-w-[180px] sm:min-w-[200px] bg-cover  sm:h-56  mb-3 border mr-5 p-3"
                                style="background-image: url(&quot;/src/assets/img/produk1-edit.png&quot;);">
                                <div class="flex flex-col  h-full justify-between">
                                    <h1 class="text-white mb-5">Cimory Minuman Yogurt Rasa Original (Original Yogurt
                                        Drink)</h1><button
                                        class="bg-white rounded-lg w-3/4 mx-auto px-3 py-1">Detail</button>
                                </div>
                            </div>
                            <div class="min-w-[180px] sm:min-w-[200px] bg-cover  sm:h-56  mb-3 border mr-5 p-3"
                                style="background-image: url(&quot;/src/assets/img/produk1-edit.png&quot;);">
                                <div class="flex flex-col  h-full justify-between">
                                    <h1 class="text-white mb-5">Cimory Minuman Yogurt Rasa Original (Original Yogurt
                                        Drink)</h1><button
                                        class="bg-white rounded-lg w-3/4 mx-auto px-3 py-1">Detail</button>
                                </div>
                            </div>
                            <div class="min-w-[180px] sm:min-w-[200px] bg-cover  sm:h-56  mb-3 border mr-5 p-3"
                                style="background-image: url(&quot;/src/assets/img/produk1-edit.png&quot;);">
                                <div class="flex flex-col  h-full justify-between">
                                    <h1 class="text-white mb-5">Cimory Minuman Yogurt Rasa Original (Original Yogurt
                                        Drink)</h1><button
                                        class="bg-white rounded-lg w-3/4 mx-auto px-3 py-1">Detail</button>
                                </div>
                            </div>
                            <div class="min-w-[180px] sm:min-w-[200px] bg-cover  sm:h-56  mb-3 border mr-5 p-3"
                                style="background-image: url(&quot;/src/assets/img/produk1-edit.png&quot;);">
                                <div class="flex flex-col  h-full justify-between">
                                    <h1 class="text-white mb-5">Cimory Minuman Yogurt Rasa Original (Original Yogurt
                                        Drink)</h1><button
                                        class="bg-white rounded-lg w-3/4 mx-auto px-3 py-1">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="flex mt-14 items-center">
                            <h1 class="text-3xl text-main-50 ml-12">Berita</h1><img src="/src/assets/img/line.png"
                                class="h-1 ml-8" alt="">
                            <h4 class="text-lg font-semibold ml-5">ALL</h4>
                            <h4 class="text-lg ml-5">Berita Utama</h4>
                            <h4 class="text-lg ml-5">Berita pangan halal</h4>
                            <h1 class="text-3xl text-main-50 ml-12">Berita terkini</h1><img
                                src="/src/assets/img/line.png" class="h-1 ml-8" alt="">
                        </div>
                        <div class="flex mt-3">
                            <div class="flex basis-[70%] ">
                                <div class=""><img src="/src/assets/img/gambar1.png" class="mb-3"
                                        alt=""><small>01 Agustus, 2022</small>
                                    <h2 class="text-lg font-semibold my-3 ">Pengawetan Makanan Minuman dan Potensi
                                        Keharamannya</h2>
                                    <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit id
                                        fermentum arcu enim. Ultricies nunc ...</p>
                                </div>
                                <div class="basis-[70%]">
                                    <div class="mb-3"><img src="/src/assets/img/gambar2.png" class="mb-1"
                                            alt="">
                                        <p>01 Agustus, 2022</p>
                                        <div class="max-w-[75%]">
                                            <h2 class="text-lg font-semibold my-3 ">Pengawetan Makanan Minuman dan
                                                Potensi Keharamannya</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit id
                                                fermentum arcu enim. Ultricies nunc ...</p>
                                        </div>
                                    </div>
                                    <div class="mb-3"><img src="/src/assets/img/gambar2.png" class="mb-1"
                                            alt="">
                                        <p>01 Agustus, 2022</p>
                                        <div class="max-w-[75%]">
                                            <h2 class="text-lg font-semibold my-3 ">Pengawetan Makanan Minuman dan
                                                Potensi Keharamannya</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit id
                                                fermentum arcu enim. Ultricies nunc ...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="flex mb-6"><img src="/src/assets/img/gambar2.png" class="mr-3 w-20 h-20"
                                        alt="">
                                    <div class="">
                                        <h2 class="text-lg font-semibold my-3 ">Pengawetan Makanan Minuman dan Potensi
                                            Keharamannya</h2><small>01 Agustus, 2022 | oleh Admin</small>
                                    </div>
                                </div>
                                <div class="flex mb-6"><img src="/src/assets/img/gambar2.png" class="mr-3 w-20 h-20"
                                        alt="">
                                    <div class="">
                                        <h2 class="text-lg font-semibold my-3 ">Pengawetan Makanan Minuman dan Potensi
                                            Keharamannya</h2><small>01 Agustus, 2022 | oleh Admin</small>
                                    </div>
                                </div>
                                <div class="flex mb-6"><img src="/src/assets/img/gambar2.png" class="mr-3 w-20 h-20"
                                        alt="">
                                    <div class="">
                                        <h2 class="text-lg font-semibold my-3 ">Pengawetan Makanan Minuman dan Potensi
                                            Keharamannya</h2><small>01 Agustus, 2022 | oleh Admin</small>
                                    </div>
                                </div>
                                <div class="flex mb-6"><img src="/src/assets/img/gambar2.png" class="mr-3 w-20 h-20"
                                        alt="">
                                    <div class="">
                                        <h2 class="text-lg font-semibold my-3 ">Pengawetan Makanan Minuman dan Potensi
                                            Keharamannya</h2><small>01 Agustus, 2022 | oleh Admin</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full ">
                            <div class="flex">
                                <div class="basis-full mr-3 ">
                                    <div class="flex items-center">
                                        <h1 class="text-2xl text-main-50">Artikel</h1><img
                                            src="/src/assets/img/line.png" class="h-1 w-full ml-3" alt="">
                                    </div>
                                    <div class="flex basis-full justify-center ">
                                        <div class=""><img src="/src/assets/img/gambar1.png" class="mb-3"
                                                alt=""><small>01 Agustus, 2022</small>
                                            <h2 class="text-lg font-semibold my-3 ">Pengawetan Makanan Minuman dan
                                                Potensi Keharamannya</h2>
                                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Elit id fermentum arcu enim. Ultricies nunc ...</p>
                                        </div>
                                        <div class=""><img src="/src/assets/img/gambar1.png" class="mb-3"
                                                alt=""><small>01 Agustus, 2022</small>
                                            <h2 class="text-lg font-semibold my-3 ">Pengawetan Makanan Minuman dan
                                                Potensi Keharamannya</h2>
                                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Elit id fermentum arcu enim. Ultricies nunc ...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="basis-[50%]">
                                    <div class="flex items-center">
                                        <h1 class="text-2xl text-main-50">Fatwa</h1><img
                                            src="/src/assets/img/line.png" class="h-1 w-full ml-3" alt="">
                                    </div>
                                    <div class="flex mb-6"><img src="/src/assets/img/gambar2.png"
                                            class="mr-3 w-20 h-20" alt="">
                                        <div class="">
                                            <h2 class="text-lg font-semibold my-3 ">Pengawetan Makanan Minuman dan
                                                Potensi Keharamannya</h2><small>01 Agustus, 2022 | oleh Admin</small>
                                        </div>
                                    </div>
                                    <div class="flex mb-6"><img src="/src/assets/img/gambar2.png"
                                            class="mr-3 w-20 h-20" alt="">
                                        <div class="">
                                            <h2 class="text-lg font-semibold my-3 ">Pengawetan Makanan Minuman dan
                                                Potensi Keharamannya</h2><small>01 Agustus, 2022 | oleh Admin</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex mt-11">
                            <div class="basis-[68%] grid grid-cols-2">
                                <div class="flex mb-6"><img src="/src/assets/img/gambar2.png" class="mr-3 w-20 h-20"
                                        alt="">
                                    <div class="">
                                        <h2 class="text-lg font-semibold my-3 ">Pengawetan Makanan Minuman dan Potensi
                                            Keharamannya</h2><small>01 Agustus, 2022 | oleh Admin</small>
                                    </div>
                                </div>
                                <div class="flex mb-6"><img src="/src/assets/img/gambar2.png" class="mr-3 w-20 h-20"
                                        alt="">
                                    <div class="">
                                        <h2 class="text-lg font-semibold my-3 ">Pengawetan Makanan Minuman dan Potensi
                                            Keharamannya</h2><small>01 Agustus, 2022 | oleh Admin</small>
                                    </div>
                                </div>
                                <div class="flex mb-6"><img src="/src/assets/img/gambar2.png" class="mr-3 w-20 h-20"
                                        alt="">
                                    <div class="">
                                        <h2 class="text-lg font-semibold my-3 ">Pengawetan Makanan Minuman dan Potensi
                                            Keharamannya</h2><small>01 Agustus, 2022 | oleh Admin</small>
                                    </div>
                                </div>
                                <div class="flex mb-6"><img src="/src/assets/img/gambar2.png" class="mr-3 w-20 h-20"
                                        alt="">
                                    <div class="">
                                        <h2 class="text-lg font-semibold my-3 ">Pengawetan Makanan Minuman dan Potensi
                                            Keharamannya</h2><small>01 Agustus, 2022 | oleh Admin</small>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="flex items-center">
                                    <h1 class="text-2xl text-main-50">Galeri</h1><img src="/src/assets/img/line.png"
                                        class="h-1 w-full ml-3" alt="">
                                </div>
                                <div class="grid grid-cols-3 gap-3"><img src="/src/assets/img/gambar3.png"
                                        alt=""><img src="/src/assets/img/gambar3.png" alt=""><img
                                        src="/src/assets/img/gambar3.png" alt=""><img
                                        src="/src/assets/img/gambar3.png" alt=""><img
                                        src="/src/assets/img/gambar3.png" alt=""><img
                                        src="/src/assets/img/gambar3.png" alt=""><img
                                        src="/src/assets/img/gambar3.png" alt=""><img
                                        src="/src/assets/img/gambar3.png" alt=""><img
                                        src="/src/assets/img/gambar3.png" alt=""></div>
                            </div>
                        </div>
                        <div class="mt-16 ">
                            <h1 class="text-2xl text-main-50 font-bold mb-8">Subsidiaries</h1>
                            <div class="flex justify-center"><img src="/src/assets/img/gambar4.png" class="mr-12"
                                    alt=""><img src="/src/assets/img/gambar4.png" class="mr-12"
                                    alt=""><img src="/src/assets/img/gambar4.png" class="mr-12"
                                    alt=""><img src="/src/assets/img/gambar4.png" class="mr-12"
                                    alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="z-20">
                    <div class="flex   bg-[#393733] text-white  mt-28 py-5 px-10  rounded-xl w-[80%] mx-auto">
                        <div class=" mr-24"><img src="/src/assets/img/logo.png" class="w-32" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque arcu, sit
                                scelerisque et odio.</p>
                        </div>
                        <div class=" mr-24"><img src="/src/assets/img/logo.png" class="w-32" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque arcu, sit
                                scelerisque et odio.</p>
                        </div>
                        <div class=" mr-24"><img src="/src/assets/img/logo.png" class="w-32" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque arcu, sit
                                scelerisque et odio.</p>
                        </div>
                        <div class=" mr-24"><img src="/src/assets/img/logo.png" class="w-32" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque arcu, sit
                                scelerisque et odio.</p>
                        </div>
                    </div>
                    <p class="text-center mt-3">Copyright 2022 | Aksara Pena</p>
                </div><img src="/src/assets/img/abs1.png" class="absolute bottom-0 left-0" alt=""><img
                    src="/src/assets/img/abst2.png" class="absolute bottom-20 w-36 right-0" alt="">
            </main>
        </div>
    </div>
@endsection
