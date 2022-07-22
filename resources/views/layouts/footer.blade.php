                                    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script src="{{asset('js/jquery.js') }}"></script>
        <script src="{{asset('js/jquery-1.8.3.min.js') }}"></script>
        <script src="{{asset('js/bootstrap.min.js') }}"></script>
        <script src="{{asset('js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{asset('js/jquery.nicescroll.js') }}" type="text/javascript"></script>
        <script src="{{asset('js/jquery.sparkline.js') }}" type="text/javascript"></script>
        <script src="{{asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
        <script src="{{asset('js/owl.carousel.js') }}" ></script>
        <script src="{{asset('js/jquery.customSelect.min.js') }}" ></script>
        <script src="{{asset('js/common-scripts.js') }}"></script>
        <script src="{{asset('js/sparkline-chart.js') }}"></script>
        <script src="{{asset('js/easy-pie-chart.js') }}"></script>
    
      <script>
          $(document).ready(function() {
              $("#owl-demo").owlCarousel({
                  navigation : true,
                  slideSpeed : 300,
                  paginationSpeed : 400,
                  singleItem : true
    
              });
          });
    
          //custom select box
    
          $(function(){
              $('select.styled').customSelect();
          });
    
      </script>