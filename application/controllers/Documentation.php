<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documentation extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    // Overview
    public function index() {
        $data['page_title'] = 'Overview - Editflo Documentation';
        $data['active_page'] = 'overview';
        $data['active_section'] = '';
        $data['active_subsection'] = '';
        $this->load->view('alldocfile/layout', $data);
    }

    // Getting Started Main
    public function getting_started() {
        $data['page_title'] = 'Getting Started - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'getting-started';
        $data['active_subsection'] = '';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_introduction() {
        $data['page_title'] = 'Introduction - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'introduction';
        $data['active_subsection'] = '';
        $this->load->view('alldocfile/layout', $data);
    }

    // Installation Main
    public function getting_started_installation() {
        $data['page_title'] = 'Installation - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = '';
        $this->load->view('alldocfile/layout', $data);
    }

    // Cloud Installation
    public function getting_started_cloud() {
        $data['page_title'] = 'Cloud Installation - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_cloud_quickstart() {
        $data['page_title'] = 'Cloud Quick Start - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud-quickstart';
        $this->load->view('alldocfile/layout', $data);
    }

    // Cloud Framework Integrations
    public function getting_started_cloud_react() {
        $data['page_title'] = 'React Integration - Editflo Cloud';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud-react';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_cloud_angular() {
        $data['page_title'] = 'Angular Integration - Editflo Cloud';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud-angular';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_cloud_vue() {
        $data['page_title'] = 'Vue.js Integration - Editflo Cloud';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud-vue';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_cloud_blazor() {
        $data['page_title'] = 'Blazor Integration - Editflo Cloud';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud-blazor';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_cloud_svelte() {
        $data['page_title'] = 'Svelte Integration - Editflo Cloud';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud-svelte';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_cloud_webcomponent() {
        $data['page_title'] = 'Web Component Integration - Editflo Cloud';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud-webcomponent';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_cloud_jquery() {
        $data['page_title'] = 'jQuery Integration - Editflo Cloud';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud-jquery';
        $this->load->view('alldocfile/layout', $data);
    }

    // Cloud Backend Integrations
    public function getting_started_cloud_django() {
        $data['page_title'] = 'Django Integration - Editflo Cloud';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud-django';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_cloud_laravel() {
        $data['page_title'] = 'Laravel Integration - Editflo Cloud';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud-laravel';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_cloud_rails() {
        $data['page_title'] = 'Ruby on Rails Integration - Editflo Cloud';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud-rails';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_cloud_bootstrap() {
        $data['page_title'] = 'Bootstrap Integration - Editflo Cloud';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud-bootstrap';
        $this->load->view('alldocfile/layout', $data);
    }

    // Self-hosted Installation
    public function getting_started_self_hosted() {
        $data['page_title'] = 'Self-Hosted Installation - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_self_hosted_quickstart() {
        $data['page_title'] = 'Self-Hosted Quick Start - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-quickstart';
        $this->load->view('alldocfile/layout', $data);
    }

    // Self-hosted Framework Integrations
    public function getting_started_self_hosted_react() {
        $data['page_title'] = 'React Integration - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-react';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_self_hosted_angular() {
        $data['page_title'] = 'Angular Integration - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-angular';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_self_hosted_vue() {
        $data['page_title'] = 'Vue.js Integration - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-vue';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_self_hosted_blazor() {
        $data['page_title'] = 'Blazor Integration - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-blazor';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_self_hosted_svelte() {
        $data['page_title'] = 'Svelte Integration - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-svelte';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_self_hosted_webcomponent() {
        $data['page_title'] = 'Web Component Integration - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-webcomponent';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_self_hosted_jquery() {
        $data['page_title'] = 'jQuery Integration - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-jquery';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_self_hosted_java() {
        $data['page_title'] = 'Java Swing Integration - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-java';
        $this->load->view('alldocfile/layout', $data);
    }

    // ZIP Installation
    public function getting_started_zip() {
        $data['page_title'] = 'ZIP Installation - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'zip';
        $this->load->view('alldocfile/layout', $data);
    }

    // Upgrading
    public function getting_started_upgrading() {
        $data['page_title'] = 'Upgrading Editflo - Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'upgrading';
        $data['active_subsection'] = '';
        $this->load->view('alldocfile/layout', $data);
    }

    // Other main sections
    public function integration() {
        $data['page_title'] = 'Integration - Editflo Documentation';
        $data['active_page'] = 'integration';
        $data['active_section'] = '';
        $data['active_subsection'] = '';
        $this->load->view('alldocfile/layout', $data);
    }

    public function configuration() {
        $data['page_title'] = 'Configuration - Editflo Documentation';
        $data['active_page'] = 'configuration';
        $data['active_section'] = '';
        $data['active_subsection'] = '';
        $this->load->view('alldocfile/layout', $data);
    }

    public function api() {
        $data['page_title'] = 'API Reference - Editflo Documentation';
        $data['active_page'] = 'api';
        $data['active_section'] = '';
        $data['active_subsection'] = '';
        $this->load->view('alldocfile/layout', $data);
    }

    // Self-hosted Supported Integrations
public function getting_started_self_hosted_supported_integrations() {
    $data['page_title'] = 'Supported Integrations - Self-Hosted Editflo';
    $data['active_page'] = 'getting-started';
    $data['active_section'] = 'installation';
    $data['active_subsection'] = 'self-hosted-supported-integrations';
    $this->load->view('alldocfile/layout', $data);
}

// Self-hosted React with Package Manager (Hosting)
public function getting_started_self_hosted_react_package_hosting() {
    $data['page_title'] = 'React with Package Manager (Hosting) - Self-Hosted Editflo';
    $data['active_page'] = 'getting-started';
    $data['active_section'] = 'installation';
    $data['active_subsection'] = 'self-hosted-react-package-hosting';
    $this->load->view('alldocfile/layout', $data);
}

// Self-hosted React with Package Manager (Bundling)
public function getting_started_self_hosted_react_package_bundling() {
    $data['page_title'] = 'React with Package Manager (Bundling) - Self-Hosted Editflo';
    $data['active_page'] = 'getting-started';
    $data['active_section'] = 'installation';
    $data['active_subsection'] = 'self-hosted-react-package-bundling';
    $this->load->view('alldocfile/layout', $data);
}

// Self-hosted Angular with Package Manager
public function getting_started_self_hosted_angular_package() {
    $data['page_title'] = 'Angular with Package Manager - Self-Hosted Editflo';
    $data['active_page'] = 'getting-started';
    $data['active_section'] = 'installation';
    $data['active_subsection'] = 'self-hosted-angular-package';
    $this->load->view('alldocfile/layout', $data);
}

// Self-hosted Vue.js with Package Manager
public function getting_started_self_hosted_vue_package() {
    $data['page_title'] = 'Vue.js with Package Manager - Self-Hosted Editflo';
    $data['active_page'] = 'getting-started';
    $data['active_section'] = 'installation';
    $data['active_subsection'] = 'self-hosted-vue-package';
    $this->load->view('alldocfile/layout', $data);
}

// Self-hosted Blazor with Package Manager
public function getting_started_self_hosted_blazor_package() {
    $data['page_title'] = 'Blazor with Package Manager - Self-Hosted Editflo';
    $data['active_page'] = 'getting-started';
    $data['active_section'] = 'installation';
    $data['active_subsection'] = 'self-hosted-blazor-package';
    $this->load->view('alldocfile/layout', $data);
}

// Self-hosted Svelte with Package Manager
public function getting_started_self_hosted_svelte_package() {
    $data['page_title'] = 'Svelte with Package Manager - Self-Hosted Editflo';
    $data['active_page'] = 'getting-started';
    $data['active_section'] = 'installation';
    $data['active_subsection'] = 'self-hosted-svelte-package';
    $this->load->view('alldocfile/layout', $data);
}

// Self-hosted Web Component with Package Manager
public function getting_started_self_hosted_webcomponent_package() {
    $data['page_title'] = 'Web Component with Package Manager - Self-Hosted Editflo';
    $data['active_page'] = 'getting-started';
    $data['active_section'] = 'installation';
    $data['active_subsection'] = 'self-hosted-webcomponent-package';
    $this->load->view('alldocfile/layout', $data);
}

// Self-hosted jQuery with Package Manager
public function getting_started_self_hosted_jquery_package() {
    $data['page_title'] = 'jQuery with Package Manager - Self-Hosted Editflo';
    $data['active_page'] = 'getting-started';
    $data['active_section'] = 'installation';
    $data['active_subsection'] = 'self-hosted-jquery-package';
    $this->load->view('alldocfile/layout', $data);
}

// Self-hosted Java Swing
public function getting_started_self_hosted_java_swing() {
    $data['page_title'] = 'Java Swing - Self-Hosted Editflo';
    $data['active_page'] = 'getting-started';
    $data['active_section'] = 'installation';
    $data['active_subsection'] = 'self-hosted-java-swing';
    $this->load->view('alldocfile/layout', $data);
}
}