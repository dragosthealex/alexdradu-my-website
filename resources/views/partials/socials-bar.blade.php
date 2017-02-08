<ul class="social-icons">
  <li>
    <a title="Mail" class="social-link mail" href="mailto:<?=App\User::find(1)->email?>"
      target="_blank">
      <span style="background-image:url('{{asset('img/icons/mail.svg')}}')">
      </span>
    </a>
  </li>
  <li>
    <a title="Github" class="social-link github" href="<?=get_option('github_url')?>"
      target="_blank">
      <span style="background-image:url('{{asset('img/icons/github.svg')}}')">
      </span>
    </a>
  </li>
  <li>
    <a title="Linkedin" class="social-link linkedin" href="<?=get_option('linkedin_url')?>"
      target="_blank">
      <span style="background-image:url('{{asset('img/icons/linkedin.svg')}}')">
      </span>
    </a>
  </li>
  <li>
    <a title="Facebook" class="social-link facebook" href="<?=get_option('facebook_url')?>"
      target="_blank">
      <span style="background-image:url('{{asset('img/icons/facebook.svg')}}')">
      </span>
    </a>
  </li>
  <li>
    <a title="Instagram" class="social-link instagram" href="<?=get_option('instagram_url')?>"
      target="_blank">
      <span style="background-image:url('{{asset('img/icons/instagram.svg')}}')">
      </span>
    </a>
  </li>
  <li>
    <a title="Google Plus" class="social-link gplus" href="<?=get_option('gplus_url')?>"
      target="_blank">
      <span style="background-image:url('{{asset('img/icons/gplus.svg')}}')">
      </span>
    </a>
  </li>
</ul>
