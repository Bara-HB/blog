<x-layouts.index>
<main class="min-h-screen relative">
  <!-- Section1 -->
   
     <section class="dm:my-10 bg-slate-800 m-10 p-10 sm:w-1/2 md:w-1/2 flex flex-col sm:mx-auto rounded-md">
         <h2 class="text-white text-2xl font-semibold mx-8 md:my-16 text-center">Kontakt</h2>
         <form action="">

           <div class="flex flex-col">
             <label for="fname" class="text-white my-10">Jméno</label>

             <div class="w-full max-w-xs mx-auto">
              <input type="text" placeholder="Jméno" class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" />
             </div>
           </div>

             <div class="flex flex-col">
               <label for="lname" class="text-white my-10">Příjmení</label>
               {{-- <input type="text" id="lname" class=""> --}}
               <div class="w-full max-w-xs mx-auto">
                <input type="text" placeholder="Příjmení" class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" />
              </div>
             </div>

           <div class="flex flex-col">
             <label for="text" class="text-white my-10">Zpráva</label>
             <textarea name="text" id="text" class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"></textarea>
           </div>

           <div class="text-center">
             <input type="submit" value="Submit" class="my-10 px-5 py-2 text-textpink font-semibold text-xl hover:text-white hover:underline bg-black rounded-md">
           </div>

         </form>
       </section>
   
    <!-- End of Section 1 -->

</main>
</x-layouts.index>