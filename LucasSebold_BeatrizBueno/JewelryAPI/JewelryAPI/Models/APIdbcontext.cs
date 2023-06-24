using Microsoft.EntityFrameworkCore;

namespace JewelryAPI.Models
{
    public class APIdbcontext : DbContext
    {
        public APIdbcontext(DbContextOptions option) : base(option)
        {

        }

        public DbSet<Jewelry> jewelries { get; set; }

        public DbSet<User> users { get; set; }
    }
}
