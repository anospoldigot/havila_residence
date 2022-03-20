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
                <div class="grid grid-cols-2 mx-40 gap-x-20">
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
                    <div class="col-span-2"></div>
                    <div class="col-span-3">
                      <p class="text-sm text-gray-400">
                        Disini Kalian akan merasakan dekat dengan fasilitas tanpa harus keluar dari area perumahan dengan terpenuhinya fasilitas yang tersedia kami menjamin kenyamanan dan keamanan semua
                      </p>
                    </div>
                    <div class="col-span-2"></div>
                  </div>
              </div>
        </section>
        <section id="image">
          
        </section>
    </main>
    <Footer />
</template>
