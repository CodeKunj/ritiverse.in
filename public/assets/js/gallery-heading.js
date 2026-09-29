/* =========================================================
   ThreeUI — GalleryHeading (Matte Rise / rising-diagonal)
   Runtime: Canvas 2D
   Services on Rotating 3D Cards
   ========================================================= */

(function initGalleryHeading() {
  'use strict';

  function setup() {
    var cv = document.getElementById('gallery-heading-canvas');
    if (!cv) return;
    var host = document.getElementById('gallery-heading-host') || cv.parentElement;
    var ctx = cv.getContext('2d');
    if (!ctx) return;

    /* Design frame: 2962 x 2160 */
    var DW = 2962, DH = 2160, DASP = DW / DH;

    var RING = {
      cx: 1481, cy: 1093,
      a: 860,
      ratio: 0.46,
      axis: 0,
      n: 8,
      tile: 600,
      aspect: 0.54,
      radius: 0.16,
      dist: 13,
      phase: 93
    };

    var DUR = 18.0;

    var HEAD = [
      { s: 'WHAT WE', top: 920,  w: 0, fill: '#181512', isGradient: false },
      { s: 'BUILD',   top: 1110, w: 0, fill: '#FD6D00', isGradient: true }
    ];
    var HEAD_CAP = 155;
    var HEAD_MID = 1093;
    var HEAD_SIZE = 1.35;
    var HEAD_WEIGHT = '800';
    var HEAD_TRACK = 0.08;
    var SPRING = 1, SPRING_K = 26, SPRING_D = 5.7;
    var SANS = '"Inter", "Helvetica Neue", Helvetica, Arial, system-ui, sans-serif';

    var SERVICES = [
      {
        title: 'ADMIN PANEL + BUSINESS SYSTEM',
        desc: 'The central hub for all your business operations.',
        isHighlight: true
      },
      {
        title: 'CRM',
        desc: 'Customer relationship management.',
        isHighlight: false
      },
      {
        title: 'ERP',
        desc: 'Enterprise resource planning.',
        isHighlight: false
      },
      {
        title: 'Websites',
        desc: 'Includes admin panel.',
        isHighlight: false
      },
      {
        title: 'Mobile Apps',
        desc: 'Native and cross-platform.',
        isHighlight: false
      },
      {
        title: 'Custom Software',
        desc: 'Built for your workflow.',
        isHighlight: false
      }
    ];

    function mkc(w, h) {
      var c = document.createElement('canvas');
      c.width = w; c.height = h;
      return c;
    }

    var TS = 1024;
    var CARD_ASPECT = 0.54;

    function roundRectPath(x, w, h, r) {
      x.beginPath();
      x.moveTo(-w/2 + r, -h/2);
      x.lineTo(w/2 - r, -h/2); x.quadraticCurveTo(w/2, -h/2, w/2, -h/2 + r);
      x.lineTo(w/2, h/2 - r);  x.quadraticCurveTo(w/2, h/2, w/2 - r, h/2);
      x.lineTo(-w/2 + r, h/2); x.quadraticCurveTo(-w/2, h/2, -w/2, h/2 - r);
      x.lineTo(-w/2, -h/2 + r);x.quadraticCurveTo(-w/2, -h/2, -w/2 + r, -h/2);
      x.closePath();
    }

    function wrapText(x, text, maxW) {
      var words = text.split(' ');
      var lines = [];
      var cur = '';
      for (var i = 0; i < words.length; i++) {
        var test = cur ? (cur + ' ' + words[i]) : words[i];
        if (x.measureText(test).width > maxW && cur) {
          lines.push(cur);
          cur = words[i];
        } else {
          cur = test;
        }
      }
      if (cur) lines.push(cur);
      return lines;
    }

    function paintServiceCard(x, i) {
      var service = SERVICES[i % SERVICES.length];
      var isHighlight = service.isHighlight;
      var cardW = TS;
      var cardH = TS * CARD_ASPECT;

      x.clearRect(0, 0, TS, TS);
      x.save();
      x.translate(TS / 2, TS / 2);

      var radius = 48;
      roundRectPath(x, cardW, cardH, radius);
      x.clip();

      /* Background matching warm soft luxury theme surface */
      var bgGrd = x.createLinearGradient(-cardW / 2, -cardH / 2, cardW / 2, cardH / 2);
      if (isHighlight) {
        bgGrd.addColorStop(0, '#FFFDF8');
        bgGrd.addColorStop(0.5, '#FFF6ED');
        bgGrd.addColorStop(1, '#FFEEDC');
      } else {
        bgGrd.addColorStop(0, '#FCFAF6');
        bgGrd.addColorStop(1, '#F3ECE0');
      }
      x.fillStyle = bgGrd;
      x.fillRect(-cardW / 2, -cardH / 2, cardW, cardH);

      /* Card Border matching theme accent / warm border */
      if (isHighlight) {
        x.strokeStyle = '#FD6D00';
        x.lineWidth = 7;
      } else {
        x.strokeStyle = '#DDD5C5';
        x.lineWidth = 4;
      }
      roundRectPath(x, cardW - 7, cardH - 7, radius - 3);
      x.stroke();

      var padX = -cardW / 2 + 64;
      var startY = -cardH / 2 + 74;

      /* 1. Title matching theme foreground */
      x.fillStyle = '#181512';
      x.textAlign = 'left';
      x.textBaseline = 'top';

      var descY = startY + 84;

      if (service.title === 'ADMIN PANEL + BUSINESS SYSTEM') {
        x.font = '800 48px "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif';
        x.fillText('ADMIN PANEL +', padX, startY);
        x.fillText('BUSINESS SYSTEM', padX, startY + 56);
        descY = startY + 128;
      } else if (service.title.length > 10) {
        x.font = '800 58px "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif';
        x.fillText(service.title, padX, startY);
        descY = startY + 84;
      } else {
        x.font = '800 68px "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif';
        x.fillText(service.title, padX, startY);
        descY = startY + 90;
      }

      /* 2. Subtitle / Description matching theme muted */
      x.fillStyle = '#6E6659';
      x.font = '500 34px "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif';
      var descLines = wrapText(x, service.desc, cardW - 128);
      for (var d = 0; d < descLines.length; d++) {
        x.fillText(descLines[d], padX, descY + d * 46);
      }

      x.restore();
    }

    function paintBackCard(x, i) {
      var cardW = TS;
      var cardH = TS * CARD_ASPECT;

      x.clearRect(0, 0, TS, TS);
      x.save();
      x.translate(TS / 2, TS / 2);

      var radius = 48;
      roundRectPath(x, cardW, cardH, radius);
      x.clip();

      var bgGrd = x.createLinearGradient(-cardW / 2, -cardH / 2, cardW / 2, cardH / 2);
      bgGrd.addColorStop(0, '#FCFAF6');
      bgGrd.addColorStop(1, '#EDE5D8');
      x.fillStyle = bgGrd;
      x.fillRect(-cardW / 2, -cardH / 2, cardW, cardH);

      x.strokeStyle = '#DDD5C5';
      x.lineWidth = 4;
      roundRectPath(x, cardW - 7, cardH - 7, radius - 3);
      x.stroke();

      /* Diamond watermark & brand */
      x.strokeStyle = 'rgba(253, 109, 0, 0.45)';
      x.lineWidth = 4;
      x.beginPath();
      x.moveTo(0, -45);
      x.lineTo(45, 0);
      x.lineTo(0, 45);
      x.lineTo(-45, 0);
      x.closePath();
      x.stroke();

      x.fillStyle = '#FD6D00';
      x.beginPath();
      x.arc(0, 0, 8, 0, Math.PI * 2);
      x.fill();

      x.fillStyle = '#6E6659';
      x.font = '700 24px "Inter", sans-serif';
      x.textAlign = 'center';
      x.textBaseline = 'top';
      x.fillText('RiTiVERSE', 0, 64);

      x.restore();
    }

    function buildTextures() {
      var front = [], back = [];
      for (var i = 0; i < RING.n; i++) {
        var c = mkc(TS, TS), x = c.getContext('2d');
        paintServiceCard(x, i);
        front.push(c);

        var d = mkc(TS, TS), y = d.getContext('2d');
        paintBackCard(y, i);
        back.push(d);
      }
      return { front: front, back: back };
    }
    var TEX = buildTextures();

    var ax = RING.axis * Math.PI / 180, cf = RING.ratio, sf = Math.sqrt(1 - cf * cf);
    var U = [Math.cos(ax), Math.sin(ax), 0];
    var V = [-Math.sin(ax) * cf, Math.cos(ax) * cf, sf];
    var AXIS = [
      U[1] * V[2] - U[2] * V[1],
      U[2] * V[0] - U[0] * V[2],
      U[0] * V[1] - U[1] * V[0]
    ];

    var W = 0, H = 0, K = 1, OX = 0, OY = 0, headLayer = null, labelLayer = null;

    function d2sx(x) { return OX + x * K; }
    function d2sy(y) { return OY + y * K; }

    function fitText(x, str, font, weight, cap, cx, capTop, targetW, color, align) {
      var probe = 100;
      x.font = weight + ' ' + probe + 'px ' + font;
      var m = x.measureText('H');
      var capUnit = (m.actualBoundingBoxAscent || 71) / probe;
      var size = cap / capUnit;
      x.font = weight + ' ' + size + 'px ' + font;
      var mm = x.measureText(str);
      var inkW = (mm.actualBoundingBoxRight || mm.width) + (mm.actualBoundingBoxLeft || 0);
      var sx = targetW ? targetW / inkW : 1;
      x.save();
      x.fillStyle = color;
      x.textBaseline = 'alphabetic';
      x.translate(cx, capTop + cap);
      x.scale(sx, 1);
      x.textAlign = align || 'center';
      var left = (mm.actualBoundingBoxLeft || 0);
      x.fillText(str, align === 'left' ? left : 0, 0);
      x.restore();
      return inkW * sx;
    }

    function headPass(x, dx, dy, tint) {
      x.save();
      if (!tint) {
        x.shadowColor = 'rgba(30, 20, 10, 0.12)';
        x.shadowBlur = 18 * K;
        x.shadowOffsetX = 0;
        x.shadowOffsetY = 8 * K;
      }
      for (var i = 0; i < HEAD.length; i++) {
        var h = HEAD[i];
        var fill = tint || h.fill;
        if (!tint && h.isGradient) {
          var y0 = d2sy(HEAD_MID + (h.top - HEAD_MID) * HEAD_SIZE) + dy;
          var y1 = y0 + HEAD_CAP * HEAD_SIZE * K;
          var x0 = d2sx(1481) + dx - 250 * K;
          var x1 = d2sx(1481) + dx + 250 * K;
          var grad = x.createLinearGradient(x0, y0, x1, y1);
          grad.addColorStop(0, '#FD6D00');
          grad.addColorStop(0.7, '#E62A00');
          grad.addColorStop(1, '#CF0000');
          fill = grad;
        }
        fitText(x, h.s, SANS, HEAD_WEIGHT, HEAD_CAP * HEAD_SIZE * K, d2sx(1481) + dx,
                d2sy(HEAD_MID + (h.top - HEAD_MID) * HEAD_SIZE) + dy, h.w ? h.w * HEAD_SIZE * K : null, fill);
      }
      x.restore();
    }

    function buildHead() {
      headLayer = mkc(Math.max(1, W), Math.max(1, H));
      var x = headLayer.getContext('2d');
      if (x.letterSpacing !== undefined) x.letterSpacing = (HEAD_TRACK * HEAD_CAP * HEAD_SIZE * K).toFixed(2) + 'px';
      headPass(x, 0, 0, null);
    }

    function buildLabels() {
      labelLayer = mkc(1, 1);
    }

    function resize() {
      var dpr = Math.min(window.devicePixelRatio || 1, 2);
      var rect = host.getBoundingClientRect();
      var cw = rect.width || window.innerWidth || 1200;
      var ch = rect.height || 560;
      W = Math.max(320, Math.round(cw * dpr));
      H = Math.max(200, Math.round(ch * dpr));
      cv.width = W;
      cv.height = H;
      var S = Math.min(W, H * DASP);
      K = (S / DW) * 1.58;
      OX = (W - DW * K) / 2;
      OY = (H - DH * K) / 2;
      buildHead();
      buildLabels();
    }

    function project(p) {
      var k = RING.a * K * RING.dist / (RING.dist - p[2]);
      return [ d2sx(RING.cx) + k * p[0], d2sy(RING.cy) + k * p[1], k ];
    }

    function drawTile(i, psi) {
      var c = Math.cos(psi), s = Math.sin(psi);
      var C  = [c * U[0] + s * V[0], c * U[1] + s * V[1], c * U[2] + s * V[2]];
      var T  = [-s * U[0] + c * V[0], -s * U[1] + c * V[1], -s * U[2] + c * V[2]];
      var h  = RING.tile / (2 * RING.a);
      
      /* Invert tangent & axis vectors so text faces right-side up (left-to-right, top-to-bottom) */
      var vX = [-T[0], -T[1], -T[2]];
      var vY = [-AXIS[0], -AXIS[1], -AXIS[2]];

      var p0 = project(C);
      var pT = project([C[0] + vX[0] * h, C[1] + vX[1] * h, C[2] + vX[2] * h]);
      var pA = project([C[0] + vY[0] * h, C[1] + vY[1] * h, C[2] + vY[2] * h]);
      var ex = pT[0] - p0[0], ey = pT[1] - p0[1];
      var fx = pA[0] - p0[0], fy = pA[1] - p0[1];
      if (Math.abs(ex * fy - ey * fx) < 0.4) return;

      var facing = C[2] > 0;
      var img = (facing ? TEX.front : TEX.back)[i % TEX.front.length];
      var cardW = TS;
      var cardH = TS * RING.aspect;
      var radius = 48;

      /* 1. Cast Realistic 3D Elevation Drop-Shadow behind each floating card */
      var depthNorm = Math.max(0, Math.min(1, (C[2] + 1) * 0.5)); // 0 (back) to 1 (front)
      var shadowOpacity = 0.05 + 0.09 * depthNorm;
      var shadowBlur = 14 + 20 * depthNorm;
      var shadowOffsetY = 8 + 14 * depthNorm;

      ctx.save();
      ctx.setTransform(ex * 2 / TS, ey * 2 / TS, fx * 2 / TS, fy * 2 / TS, p0[0], p0[1]);

      // Soft diffuse ambient shadow
      ctx.shadowColor = 'rgba(35, 22, 10, ' + shadowOpacity.toFixed(3) + ')';
      ctx.shadowBlur = shadowBlur;
      ctx.shadowOffsetX = 0;
      ctx.shadowOffsetY = shadowOffsetY;
      ctx.fillStyle = '#FFFFFF';
      roundRectPath(ctx, cardW, cardH, radius);
      ctx.fill();

      // Sharp contact shadow
      ctx.shadowColor = 'rgba(35, 22, 10, ' + (shadowOpacity * 0.75).toFixed(3) + ')';
      ctx.shadowBlur = 6;
      ctx.shadowOffsetX = 0;
      ctx.shadowOffsetY = 3;
      roundRectPath(ctx, cardW, cardH, radius);
      ctx.fill();

      ctx.restore();

      /* 2. Draw Card Face Texture */
      ctx.save();
      ctx.setTransform(ex * 2 / TS, ey * 2 / TS, fx * 2 / TS, fy * 2 / TS, p0[0], p0[1]);
      ctx.shadowColor = 'transparent';
      ctx.shadowBlur = 0;
      ctx.shadowOffsetX = 0;
      ctx.shadowOffsetY = 0;
      roundRectPath(ctx, cardW, cardH, radius);
      ctx.clip();
      ctx.drawImage(img, -TS / 2, -TS / 2, TS, TS);
      ctx.restore();
      ctx.setTransform(1, 0, 0, 1, 0, 0);
    }

    function render(t) {
      ctx.setTransform(1, 0, 0, 1, 0, 0);
      ctx.clearRect(0, 0, W, H);
      ctx.imageSmoothingQuality = 'high';

      var spin = (t / DUR) * Math.PI * 2;
      var list = [], i;
      for (i = 0; i < RING.n; i++) {
        var psi = RING.phase * Math.PI / 180 - i * 2 * Math.PI / RING.n + spin;
        var c = Math.cos(psi), s = Math.sin(psi);
        list.push({ i: i, psi: psi, z: c * U[2] + s * V[2] });
      }
      list.sort(function(a, b) { return a.z - b.z; });

      var drawnText = false;
      for (i = 0; i < list.length; i++) {
        if (!drawnText && list[i].z > 0) { ctx.drawImage(headLayer, 0, 0); drawnText = true; }
        drawTile(list[i].i, list[i].psi);
      }
      if (!drawnText) ctx.drawImage(headLayer, 0, 0);
      ctx.drawImage(labelLayer, 0, 0);
    }

    var tNow = 0, playing = true, hovering = false, rate = 0.45, vel = 0, last = performance.now();

    host.addEventListener('pointerenter', function() { hovering = true; });
    host.addEventListener('pointerleave', function() { hovering = false; });
    host.addEventListener('pointerdown',  function() { hovering = true; });

    function frame(now) {
      var dt = Math.min(0.05, Math.max(0, (now - last) / 1000));
      last = now;
      if (playing) {
        var targetRate = hovering ? 1.25 : 0.45;
        if (SPRING) {
          vel += ((targetRate - rate) * SPRING_K - vel * SPRING_D) * dt;
          rate += vel * dt;
        } else {
          rate += (targetRate - rate) * (1 - Math.exp(-dt / EASE));
        }
        tNow = ((tNow + dt * rate) % DUR + DUR) % DUR;
        render(tNow);
      }
      requestAnimationFrame(frame);
    }

    window.addEventListener('resize', function() { resize(); render(tNow); });
    if (typeof ResizeObserver !== 'undefined') {
      var ro = new ResizeObserver(function() { resize(); render(tNow); });
      ro.observe(host);
    }

    resize();
    render(tNow);
    requestAnimationFrame(frame);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', setup);
  } else {
    setup();
  }
})();
