using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using JewelryAPI.Models;
using System.Web.Http.Cors;

namespace JewelryAPI.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class JewelryController : ControllerBase
    {
        private readonly APIdbcontext _context;

        public JewelryController(APIdbcontext context)
        {
            _context = context;
        }

        // GET: api/Jewelry
        [HttpGet]
        public async Task<ActionResult<IEnumerable<Jewelry>>> Getjewelries()
        {
          if (_context.jewelries == null)
          {
              return NotFound();
          }
            return await _context.jewelries.ToListAsync();
        }

        // GET: api/Jewelry/5
        [HttpGet("{id}")]
        public async Task<ActionResult<Jewelry>> GetJewelry(int id)
        {
          if (_context.jewelries == null)
          {
              return NotFound();
          }
            var jewelry = await _context.jewelries.FindAsync(id);

            if (jewelry == null)
            {
                return NotFound();
            }

            return jewelry;
        }

        // PUT: api/Jewelry/5
        // To protect from overposting attacks, see https://go.microsoft.com/fwlink/?linkid=2123754
        [HttpPut("{id}")]
        public async Task<IActionResult> PutJewelry(int id, Jewelry jewelry)
        {
            if (id != jewelry.JewelryId)
            {
                return BadRequest();
            }

            _context.Entry(jewelry).State = EntityState.Modified;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!JewelryExists(id))
                {
                    return NotFound();
                }
                else
                {
                    throw;
                }
            }

            return NoContent();
        }

        // POST: api/Jewelry
        // To protect from overposting attacks, see https://go.microsoft.com/fwlink/?linkid=2123754
        [DisableCors]
        [HttpPost]
        public async Task<IActionResult> PostJewelry(Jewelry jewelry)
        {
          if (_context.jewelries == null)
          {
              return Problem("Entity set 'APIdbcontext.jewelries'  is null.");
          }
            _context.jewelries.Add(jewelry);
            await _context.SaveChangesAsync();

            return CreatedAtAction("GetJewelry", new { id = jewelry.JewelryId }, jewelry);
        }

        //[HttpPost("/login")]
        //public async Task<IActionResult> Login(Jewelry jewelry)
        //{
        //    //var log = DB.EmployeeLogins.Where(x => x.Email.Equals(login.Email) && x.Password.Equals(login.Password)).FirstOrDefault();

        //    var login = _context.jewelries.Where(c => c.Email == jewelry.Email && c.Password == jewelry.Password);

        //    if (login.Any(t => t.Email == jewelry.Email && t.Password == jewelry.Password))
        //    {
        //        return Ok(new { status = 200, isSuccess = true, message = "User Login successfully", UserDetails = login });
        //    }
        //    else
        //    {
        //        return Ok(new { status = 401, isSuccess = false, message = "Invalid User", });
        //    }
        //}

        // DELETE: api/Jewelry/5
        [HttpDelete("{id}")]
        public async Task<IActionResult> DeleteJewelry(int id)
        {
            if (_context.jewelries == null)
            {
                return NotFound();
            }
            var jewelry = await _context.jewelries.FindAsync(id);
            if (jewelry == null)
            {
                return NotFound();
            }

            _context.jewelries.Remove(jewelry);
            await _context.SaveChangesAsync();

            return NoContent();
        }

        private bool JewelryExists(int id)
        {
            return (_context.jewelries?.Any(e => e.JewelryId == id)).GetValueOrDefault();
        }
    }
}
