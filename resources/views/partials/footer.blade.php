<footer class="footer mt-auto py-4">
    <div class="container">
        @isset($footerDivider)
            <hr class="my-4">
        @endisset
        <div class="copyright text-center mb-2 mb-md-0">
            &copy; {{ date('Y') }} -
            <a href="https://rogue-dev-studio.github.io/"
               target="_blank"
               rel="noopener noreferrer"
               class="text-success text-decoration-none">rogue-dev-studio.github.io</a>.
            All rights reserved.
        </div>
    </div>
</footer>
