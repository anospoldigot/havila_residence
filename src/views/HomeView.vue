<script setup>
import TheWelcome from '@/components/TheWelcome.vue'
import Navbar from '@/components/Navbar.vue'
import Footer from '@/components/Footer.vue'
</script>

<template>
    <header>
        <Navbar />
        <div class="h-screen">
            <div class="h-full bg-primary flex items-center">
                <div class="grid grid-cols 1 lg:grid-cols-2 mx-12 lg:mx-40 gap-x-20 gap-y-12">
                    <div>
                        <img src="@/assets/house1.jpg" alt="" class="h-full object-cover">
                    </div>
                    <div>
                        <img src="@/assets/house2.jpg" alt="" class="h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section id="why" class="bg-white py-20">
              <div class="mb-32">
                  <h1 class="text-center text-2xl font-semibold uppercase">Kenapa Harus Havilla Residence</h1>
              </div>
              <hr class="mb-40">
              <div class="mb-40">
                  <h1 class="text-center text-2xl font-semibold uppercase mb-10">Dekat Kemana Saja</h1>
                  <div class="grid grid-cols-7">
                    <div class="col-span-2 hidden lg:block"></div>
                    <div class="col-span-full lg:col-span-3 mx-2">
                      <p class="text-sm text-gray-400">
                        Disini Kalian akan merasakan dekat dengan fasilitas tanpa harus keluar dari area perumahan dengan terpenuhinya fasilitas yang tersedia kami menjamin kenyamanan dan keamanan semua
                      </p>
                    </div>
                    <div class="col-span-2 hidden lg:block"></div>
                  </div>
              </div>
        </section>
        <section id="image">
            <div>
                <div class="grid grid-cols-6 gap-x-12 mb-24">
                    <div class="hidden lg:block"></div>
                    <div class="col-span-full lg:col-span-2">
                        <img src="@/assets/house2.jpg" alt="" class="h-full object-cover">
                    </div>
                    <div class="col-span-full lg:col-span-2">
                        <img src="@/assets/house1.jpg" alt="" class="h-full object-cover">
                    </div>
                    <div class="hidden lg:block"></div>
                </div>
            </div>
            <div class="text-center mb-12" id="contact">
                <h1 class="font-bold text-3xl">Contact Us</h1>
            </div>
        </section>
    </main>
    <Footer />
</template>
