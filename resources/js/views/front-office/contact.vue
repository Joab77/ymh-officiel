<template>
  <div class="page-content bg-white">
    <section class="bg-secondary content-inner-1 contact-us2 overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="map-fixed">
            <div class="contact-map">
              <img src="/images/map.png" alt="/">
            </div>
          </div>
          <div class="col-xl-6 col-md-7">
            <div class="contact-info style-1 text-start text-white">
              <h2 class="title wow fadeInUp" data-wow-delay="0.1s">France</h2>
              <p class="text wow fadeInUp" data-wow-delay="0.2s"><span>Address:</span> YHM-OFFICIEL</p>
              <div class="contact-bottom wow fadeInUp" data-wow-delay="0.3s">
                <div class="contact-left">
                  <h3>Phone</h3>
                  <ul>
                    <li>+33-152-154-7890</li>
                    <li>+33-152-154-7890</li>
                  </ul>
                </div>
                <div class="contact-right">
                  <h3>Reseau sociaux</h3>
                  <ul>
                    <li> <i class='fab fa-facebook-square me-3'></i> yhm@officiel.com</li>
                    <li> <i class='fab fa-facebook-square me-3'></i> yhm@officiel.com</li>
                    <li> <i class='fab fa-facebook-square me-3'></i> yhm@officiel.com</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="contact-area1 wow fadeInUp" data-wow-delay="0.4s">


              <form class="dz-form dzForm">
                <label class="form-label">Nom</label>
                <div class="input-group">
                  <input required type="text" class="form-control" name="dzName">
                </div>
                <label class="form-label">Adresse mail</label>
                <div class="input-group">
                  <input required type="email" class="form-control" name="dzEmail">
                </div>
                <label class="form-label">Phone</label>
                <div class="input-group">
                  <input required type="tel" class="form-control" name="dzPhoneNumber">
                </div>
                <label class="form-label">Message</label>
                <div class="input-group m-b15">
                  <textarea name="dzMessage" rows="4" required="" class="form-control m-b10"></textarea>
                </div>
                <div>
                  <button name="submit" type="submit" value="submit" class="btn w-100 btn-secondary btnhover rounded-0">Envoyer</button>
                </div>
              </form>


            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>

</script>

<style scoped lang='scss'>

</style>
