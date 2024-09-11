using Microsoft.AspNetCore.Mvc;

namespace SoftexWebsite.Controllers
{
    public class ProductController : Controller
    {
        [Route("/market-control-online-employees-tracking-system")]
        [Route("/ar-EG/market-control-online-employees-tracking-system")]
        public IActionResult GPS()
        {
            return View();
        }
    }
}
