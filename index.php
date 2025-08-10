<?php
/* Under Construction Page */
wp_head();
?>
<style>
    *{
        margin: 0;
        padding: 0;
    }
.uc-container {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background: linear-gradient(120deg, #4f8cff 0%, #6ed6ff 100%);
  color: #fff;
  text-align: center;
}
.uc-container img {
  width: 220px;
  margin-bottom: 32px;
}
.uc-title {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 18px;
}
.uc-msg {
  font-size: 1.2rem;
  margin-bottom: 32px;
}
.uc-footer {
  margin-top: 48px;
  font-size: 1rem;
  color: #e0eaff;
}
</style>
<div class="uc-container">
  <div class="uc-title">Site Under Construction</div>
</div>
<?php wp_footer(); ?>
